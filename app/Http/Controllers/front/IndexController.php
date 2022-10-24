<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Carousel;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index()
    {
        $data['carousels'] = DB::table('carousels')
            ->orderBy('created_at', 'DESC')
            ->get();

        $data['about'] = DB::table('abouts')->first() ;
        $data['services'] = DB::table('services')
            ->orderBy('id', 'DESC')
            ->get();

        

        return view('front.index')->with($data);
    }
}
