<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\NewsletterSubscripers;
use App\Models\Notification;
use App\Models\RecievedEmail;
use Illuminate\Support\Facades\Auth;

class EmailController extends Controller
{
    public function getEmailFromNotifications($emailId, $notificationId)
    {
        try {
            $notification = Notification::find($notificationId);
            $notification->read_at = now('Asia/Baghdad')->format('Y-m-d h:i:s');
            $notification->update() ;
            $data['email'] = RecievedEmail::find($emailId);
            $data['email']->status = 'Read at ' . now('Asia/Baghdad')->format('Y-m-d h:i:s') ;
            $data['email']->update() ;
            return view('admin.email.emailView')->with($data);
        } catch (\Exception $e) {
            $data['error'] = $e->getMessage();
            return view('serverError')->with($data);
        }
    }

    public function subscribers()
    {
        try {
            $data['subscribers'] = NewsletterSubscripers::all() ;
            return view('admin.subscribers.subscribers')->with($data) ;
        } catch (\Exception $e) {
            $data['error'] = $e->getMessage() ;
            return view('serverError')->with($data) ;
        }
    }


    public function inbox()
    {
        $user = Auth::guard('AdminAuth')->user() ;
        $data['emails'] = $user->notifications ;
        return view('admin.inbox.inbox')->with($data) ;
    }
}
