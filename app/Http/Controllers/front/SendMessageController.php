<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\RecievedEmail;
use Illuminate\Http\Request;
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
            $message->save() ;

            return back() ;

        } catch (\Exception $e) {
            $error = $e->getMessage();
            return view('login')->with('error', $error);
        }
    }
}
