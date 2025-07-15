<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrutsController;

Route::apiResource('fruts', FrutsController::class);




/*Route::middleware('auth:sanctum')->get('/user', function(Request $request){
    return $request->user();

});*/