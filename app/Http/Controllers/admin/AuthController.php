<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function doLogin(Request $request)
    {
        try {
            $validator = Validator::make($request->only('email', 'password'), [
                'email' => 'required|email|max:255',
                'password' => 'required|min:6',
            ]);

            if ($validator->fails()) {
                $data['errors'] = $validator->errors();
                return redirect()->back()->with($data);
            }


            $credentials = $request->only('email', 'password');

            if (!auth()->guard('AdminAuth')->attempt($credentials)) {
                $error = 'Invalid Credentials';
                return view('admin.login')->with('error', $error);
            } else {
                return redirect('/admin');
            }
        } catch (\Exception $e) {
            $data['error'] = $e->getMessage();
            return view('serverError')->with($data);
        }
    }

    public function logout()
    {
        Auth::guard('AdminAuth')->logout();
        return redirect()->route('admin.loginPage');
    }
}
