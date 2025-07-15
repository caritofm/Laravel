<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $users = User::all(); //nos trae todos los registros
        #$users = User::where('age',18)-> get(); // estoy pidiendo que me traiga que el usuario sea igual que edad 18
        //$users = User::where('age',18) -> orwhere('zip-code', '280808') que me cumpla una o la otra ;
        //$users = DB::select(DB::raw("SELECT * FROM users"));
        return view('user.index', [
            "users" => $users
        ]);

        //compact('users') accede a los users igual que el arreglo
    }

    public function create(){
        //DB::insert(DB::raw("INSERT INTO users values "))//permite realizar sentencias SQL puras 
        //DB::table('users')->insert('name'-> 'Juanjo') //son sentencias pero no puras y se uriliza en ORM, en este caso se utiliza en MVC
        $users = new User();
        $users -> email = 'Juan@example.com';
        $users -> password = Hash::make('123456');
        $users -> age = 18;
        $users -> addres = 'calle demostracion 12';
        $users -> zip_code = 290909;
        $users -> save();

        //se guarda con archivos staticos para guardarlos en la bbdd    
        User::create([
            
            "email" => "ruiz@example.com",
            "password" => Hash::make('123456'),
            "age" => 18,
            "addres" => "Avenida de prueba 18",
            "zip_code" => 280808
        ]);

        return redirect()-> route('user.index');

    }
}
