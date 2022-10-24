<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class MoreAbout extends Controller
{
    public function get()
    {
        try {

            $about = About::first() ;
            $data['title'] = $about->title ;
            $data['long_description_title_color'] = $about->long_description_title_color ;
            $data['long_description_image'] = $about->long_description_image ;
            $data['long_description'] = $about->long_description ;
            $data['long_description_sub_image'] = $about->long_description_sub_image ;



            return view('front.article')->with($data) ;

        } catch (\Exception $e) {
            $error = $e->getMessage();
            return $error ;
        }
    }
}
