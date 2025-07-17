<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ExampleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrutsController;
use App\Http\Resources\UserResource;
use App\Models\User;

/*Route::apiResource('fruts', FrutsController::class);

Route::get('/user', function(Request $request){
    return new UserResource(User::find(1));
});*/

Route::middleware('auth:sanctum')-> get('/user', function(Request $request){
    return $request -> user();
});

/*
Route::middleware('example') ->get('/', [ExampleController::class, 'index']);

Route::middleware('/no-access') ->get('/', [ExampleController::class, 'noAccess']) -> name('no-access');
*/
Route::post('/create', [AuthController::class, 'createUser']);
Route::post('/login ',[AuthController::class, 'loginUser']);