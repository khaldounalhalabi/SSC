<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Carousel;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CarouselController extends Controller
{
    public function index()
    {
        try {
            $data['carousels'] = DB::table('carousels')
            ->orderBy('id', 'ASC')
            ->paginate(5);

            return view('admin.carousel.carousels')->with($data);
        } catch (\Exception $e) {
            $data['error'] = $e->getMessage() ;
            return view('serverError')->with($data) ;
        }
    }



    public function editPage($id)
    {
        try {
            $data['carousel'] = Carousel::find($id);
            return view('admin.carousel.EditCarousel')->with($data);
        } catch (\Exception $e) {
            $data['error'] = $e->getMessage();
            return view('serverError')->with($data);
        }
    }



    public function doEdit($id, Request $request)
    {
        try {
            $rules = [
                'title' => 'string|nullable|min:3|max:255',
                'title_color' => 'string|default:white|nullable',
            ];

            $validator = Validator::make($request->only('title , title_color') , $rules) ;

            if($validator->fails()){
                $data['errors'] = $validator->errors() ;
                return back()->with($data) ;
            }

            $carousel = Carousel::find($id);
            $carousel->title = $request->title;
            $carousel->title_color = $request->title_color;

            if ($request->hasFile('image') != null) {
                $destenation_path = 'carousles/images';
                $image_name = $request->file('image')->hashName();
                $carousel->image = $destenation_path . '/' . $image_name;
                $path = $request->file('image')->storeAs('public/' . $destenation_path, $image_name);
            }

            $carousel->save();

            return redirect()->route('admin.carousel');

        } catch (\Exception $e) {
            $data['error'] = $e->getMessage();
            return view('serverError')->with($data);
        }
    }

}
