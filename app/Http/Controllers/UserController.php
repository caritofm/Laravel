<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $users = User::all(); //nos trae todos los registros
        return view('user.index', [
            "users" => $users
        ]);

        //compact('users') accede a los users igual que el arreglo
    }

    public function create(){
        $users = new User();
        $users -> name = 'Juan';
        $users -> email = 'Juan@example.com';
        $users -> password = Hash::make('123456');
        $users -> age = 25;
        $users -> address = 'calle demostracion 12';
        $users -> zip_code = 290909;
        $users -> save();

        //se guarda con archivos staticos para guardarlos en la bbdd    
        Users::create([
            "name " => "Ruiz",
            "email" => "ruiz@example.com",
            "password" => Hash::make('123456'),
            "age" => 18,
            "address" => "Avenida de prueba 18",
            "zip_code" => 280808
        ]);

        return redirect()-> route('user.index');

    }
}
