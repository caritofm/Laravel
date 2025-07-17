<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
        $user = User::find(2);
        return view('user.index', compact('user'));
    }
}
