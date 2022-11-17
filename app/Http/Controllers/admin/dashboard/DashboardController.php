<?php

namespace App\Http\Controllers\admin\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Carousel;
use App\Models\NewsletterSubscripers;
use App\Models\RecievedEmail;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function dashboard(Carousel $carousel)
    {
        try {
            $data['recieved_emails_today'] = RecievedEmail::where('date', Carbon::now('Asia/Damascus')->format('Y-m-d'))->count();
            $data['visitors'] = visits($carousel)->count();
            $user = auth()->guard('AdminAuth')->user();
            $data['notifications'] = $user->unreadNotifications ;
            $data['subscribers'] = NewsletterSubscripers::count() ;

            return view('admin.index')->with($data);
        } catch (\Exception $e) {
            $data['error'] = $e->getMessage() ;
            return view('serverError')->with($data) ;
        }
    }
}
