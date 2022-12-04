<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class LanguageController extends Controller
{
    public function setLanguage($lang)
    {
        Cookie::queue('lang', $lang, 3600);

        return redirect()->back();
    }
}
