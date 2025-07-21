<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $msg = __('welcome.hello') . ' - ' . __('welcome.greeting', ['name' => 'Carolina']);
        return view('welcome', compact('msg'));
    }
}
