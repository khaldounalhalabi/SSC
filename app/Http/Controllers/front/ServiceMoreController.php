<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Support\Facades\Cookie;

class ServiceMoreController extends Controller
{
    public function get($id)
    {
        try {
            $service = Service::find($id);
            $data['title'] = $service->title;
            $data['arabic_title'] = $service->arabic_title ;
            $data['arabic_long_description'] = $service->arabic_long_description;
            $data['long_description_title_color'] = $service->long_description_title_color;
            $data['long_description'] = $service->long_description;
            $data['long_description_image'] = $service->long_description_image;
            $data['long_description_sub_image'] = $service->long_description_sub_image;

            $lang = Cookie::get('lang');

            if ($lang == 'ar') {
                return view('ArabicFront.article')->with($data);
            } else {
                return view('front.article')->with($data);
            }
        } catch (\Exception $e) {
            return view('serverError');
        }
    }
}
