<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function editPage()
    {
        $data['contact'] = Contact::first();

        return view('admin.contact.EditContact')->with($data);
    }

    public function doEdit(Request $request)
    {
        $rules = [
            'street' => 'string|min:3|max:255|required',
            'arabic_street' => 'string|min:3|max:255|required',
            'city' => 'string|min:3|max:255|required',
            'arabic_city' => 'string|min:3|max:255|required',
            'phone' => 'string|min:3|max:255|required',
            'mobile' => 'string|min:3|max:255|required',
            'email' => 'string|min:3|max:255|required|email',
            'map' => 'required|min:3',
        ];

        $validator = Validator::make($request->only(
            'street',
            'arabic_street',
            'city',
            'arabic_city',
            'phone',
            'mobile',
            'email',
            'map',
        ), $rules);

        if($validator->fails())
        {
            $data['errors'] = $validator->errors() ;
            return back()->with($data) ;
        }

        $contact = Contact::first() ;

        $contact->street = $request->street ;
        $contact->arabic_street = $request->arabic_street ;
        $contact->city = $request->city ;
        $contact->arabic_city = $request->arabic_city ;
        $contact->phone = $request->phone ;
        $contact->mobile = $request->mobile ;
        $contact->email = $request->email ;
        $contact->map = $request->map ;

        $contact->save() ;

        $data['contact'] = $contact ;

        return back()->with($data) ;
    }
}
