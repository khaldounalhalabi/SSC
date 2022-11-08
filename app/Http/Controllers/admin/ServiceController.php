<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ServiceController extends Controller
{
    public function index()
    {
        $data['services'] = DB::table('services')
        ->orderBy('id', 'ASC')
        ->get();

        return view('admin.service.services')->with($data) ;
    }

    public function editPage($id)
    {
        $data['service'] = Service::find($id) ;
        return view('admin.service.EditService')->with($data) ;
    }

    public function doEdit($id , Request $request)
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

            $service = Service::first();
            $service->title = $request->title;
            $service->arabic_title = $request->arabic_title;
            $service->short_description = $request->short_description;
            $service->arabic_short_description = $request->arabic_short_description;
            $service->long_description_title_color = $request->long_description_title_color;
            $service->long_description = $request->long_description;
            $service->arabic_long_description = $request->arabic_long_description;


            if ($request->hasFile('long_description_image') != null) {
                $destenation_path = 'service/images';
                $image_name = $request->file('long_description_image')->hashName();
                $service->long_description_image = $destenation_path . '/' . $image_name;
                $path = $request->file('long_description_image')->storeAs('public/' . $destenation_path, $image_name);
            }

            if ($request->hasFile('long_description_sub_image') != null) {
                $destenation_path = 'service/images';
                $image_name = $request->file('long_description_sub_image')->hashName();
                $service->long_description_sub_image = $destenation_path . '/' . $image_name;
                $path = $request->file('long_description_sub_image')->storeAs('public/' . $destenation_path, $image_name);
            }

            $service->save();
            $data['service'] = $service;
            return back()->with($data);
        } catch (\Exception $e) {
            return response($e->getMessage());
        }
    }
}
