<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class AboutController extends Controller
{
    public function editPage()
    {
        try {
            $data['about'] = DB::table('abouts')->first();
            return view('admin.about.EditAbout')->with($data);
        } catch (\Exception $e) {
            //throw $th;
        }
    }

    public function doEdit(Request $request)
    {
        try {
            $rules = [
                'title' => 'string|required|min:3|max:255',
                'arabic_title' => 'string|required|min:3|max:255',
                'short_description' => 'min:3|string|required|max:255',
                'arabic_short_description' => 'min:3|required|string|max:255',
                'long_description_title_color' => 'string|max:255',
                'long_description' => 'nullable|min:3',
                'arabic_long_description' => 'nullable|min:3',
            ];

            $validator = Validator::make($request->only(
                'title',
                'arabic_title',
                'short_description',
                'arabic_short_description',
                'long_description_title_color',
                'long_description',
                'arabic_long_description',
            ), $rules);

            if ($validator->fails()) {
                $data['errors'] = $validator->errors();
                return back()->with($data);
            }

            $about = About::first();
            $about->title = $request->title;
            $about->arabic_title = $request->arabic_title;
            $about->short_description = $request->short_description;
            $about->arabic_short_description = $request->arabic_short_description;
            $about->long_description_title_color = $request->long_description_title_color;
            $about->long_description = $request->long_description;
            $about->arabic_long_description = $request->arabic_long_description;



            if ($request->hasFile('image') != null) {
                $destenation_path = 'about/images';
                $image_name = $request->file('image')->hashName();
                $about->image = $destenation_path . '/' . $image_name;
                $path = $request->file('image')->storeAs('public/' . $destenation_path, $image_name);
            }

            if ($request->hasFile('long_description_image') != null) {
                $destenation_path = 'about/images';
                $image_name = $request->file('long_description_image')->hashName();
                $about->long_description_image = $destenation_path . '/' . $image_name;
                $path = $request->file('long_description_image')->storeAs('public/' . $destenation_path, $image_name);
            }

            if ($request->hasFile('long_description_sub_image') != null) {
                $destenation_path = 'about/images';
                $image_name = $request->file('long_description_sub_image')->hashName();
                $about->long_description_sub_image = $destenation_path . '/' . $image_name;
                $path = $request->file('long_description_sub_image')->storeAs('public/' . $destenation_path, $image_name);
            }

            $about->save();
            $data['about'] = $about;
            return back()->with($data);
        } catch (\Exception $e) {
            $data['error'] = $e->getMessage() ;
            return view('serverError')->with($data) ;
        }
    }
}
