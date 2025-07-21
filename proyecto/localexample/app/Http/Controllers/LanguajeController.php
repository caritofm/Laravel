<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguajeController extends Controller
{


public function switchLanguage($lang)
{
    if (in_array($lang, config('app.languages'))) {
        session(['locale' => $lang]);
    } else {
        session(['locale' => config('fallback_locale')]);
    }

    return redirect()->back();
}
}
