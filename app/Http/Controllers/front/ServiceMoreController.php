<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceMoreController extends Controller
{
    public function get($id)
    {
        $service = Service::find($id) ;
        $data['title'] = $service->title ;
        $data['long_description_title_color'] = $service->long_description_title_color ;
        $data['long_description'] = $service->long_description ;
        $data['long_description_image'] = $service->long_description_image ;
        $data['long_description_sub_image'] = $service->long_description_sub_image ;
        return view('front.article')->with($data) ;
    }
}
