<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\LoginUserRequest;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function createUser(CreateUserRequest $request)
    {
        $user = User::create([
            'name' => $request,
            'email' => $request,
            'password'=> Hash::make($request -> password)
        ]);

        return response() -> json([
            'status' => true,
            'message' => 'User create successfully',
            'token' =>  $user -> createToken("API TOKEN") -> plaintextToken
        ], 200);

    }

     public function loginUser(LoginUserRequest $request)
    {
       if( Auth::attempt($request ->only(['email', 'password' ])))
       {
        return response() -> json([
            'status' => false,
            'message' => 'Email & Password do not match with our records'
        ], 401);
       }

       $user = User::where('email', $request->email)-> first();

       return response()->json([
        'status' => true,
        'message' => 'User logged in successfuly',
        'Token' => $user -> createToken("API TOKEN") -> plainTextToken
        
       ], 200);
    }
}
