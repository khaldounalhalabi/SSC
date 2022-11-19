<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Carousel;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index(Carousel $carousel)
    {
        try {
            $carousel->visitsCounter()->increment();

            $data['carousels'] = DB::table('carousels')
            ->orderBy('created_at', 'ASC')
            ->get();

            $data['about'] = DB::table('abouts')->first();
            $data['services'] = DB::table('services')
            ->orderBy('id', 'ASC')
            ->get();


            $lang = Cookie::get('lang') ;

            if($lang == 'ar'){
                return view('ArabicFront.index')->with($data);
            }
            else{
                return view('front.index')->with($data);
            }
        } catch (\Exception $e) {
            return view('serverError') ;
        }
    }
}
