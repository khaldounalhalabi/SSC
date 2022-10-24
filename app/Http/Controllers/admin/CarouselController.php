<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarouselController extends Controller
{
    public function index()
    {
        $data['carousels'] = DB::table('carousels')
            ->orderBy('id', 'ASC')
            ->paginate(5);

        return view('admin.carousel.carousels')->with($data) ;
    }
}
