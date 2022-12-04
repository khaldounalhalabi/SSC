<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class ContactController extends Controller
{
    public function index()
    {
        $lang = Cookie::get('lang');
        if($lang == 'ar'){
            return view('ArabicFront.contact') ;
        } else {
            return view('front.contact') ;
        }
    }
}
