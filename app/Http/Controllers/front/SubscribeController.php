<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubscribeController extends Controller
{
    public function subscribe(Request $request)
    {
        try {

            DB::table('newsletter_subscripers')->insert([
                'email' => $request->email,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            return back();
        } catch (\Exception $e) {
            $data['error'] = $e->getMessage();
            return view('serverError');
        }
    }
}
