<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\RecievedEmail;
use App\Models\User;
use App\Notifications\RecievedEmailNotification;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Validator;

class SendMessageController extends Controller
{
    public function send(Request $request)
    {
        try {
            $rules = [
                'body' => 'required|min:3',
                'email' => 'required|email',
                'name' => 'nullable|min:3',
                'subject' => 'nullable|min:3'
            ];

            $data = $request->only('body', 'email', 'name', 'subject');
            $validator = Validator::make($data, $rules);

            if ($validator->fails()) {
                $error['errors'] = $validator->errors();
                return redirect()->back()->with($error) ;
            }

            $message = new RecievedEmail ;
            $message->body = $data['body'] ;
            $message->email = $data['email'] ;
            $message->name = $data['name'] ;
            $message->subject = $data['subject'] ;
            $message->date = Carbon::now('Asia/Damascus')->format('Y-m-d') ;
            $message->save() ;

            $users = User::all() ;
            Notification::sendNow($users , new RecievedEmailNotification($message)) ;
            return back() ;

        } catch (\Exception $e) {
           return view('serverError') ;
        }
    }
}
