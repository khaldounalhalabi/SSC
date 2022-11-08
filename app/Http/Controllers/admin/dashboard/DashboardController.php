<?php

namespace App\Http\Controllers\admin\dashboard;

use App\Http\Controllers\Controller;
use App\Models\RecievedEmail;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $data['recieved_emails_today'] = RecievedEmail::where('date' , Carbon::now('Asia/Damascus')->format('Y-m-d'))->count() ;
        return view('admin.index') ;
    }
}
