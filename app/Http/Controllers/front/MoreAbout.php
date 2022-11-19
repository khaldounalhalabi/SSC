<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class MoreAbout extends Controller
{
    public function get()
    {
        try {

            $about = About::first() ;
            $data['title'] = $about->title;
            $data['arabic_title'] = $about->arabic_title;
            $data['long_description_title_color'] = $about->long_description_title_color ;
            $data['long_description_image'] = $about->long_description_image ;
            $data['long_description'] = $about->long_description;
            $data['arabic_long_description'] = $about->arabic_long_description;
            $data['long_description_sub_image'] = $about->long_description_sub_image ;

            $lang = Cookie::get('lang');

            if($lang == 'ar'){
                return view('ArabicFront.article')->with($data);
            } else {
                return view('front.article')->with($data);
            }

        } catch (\Exception $e) {
           return view('serverError') ;
        }
    }
}
