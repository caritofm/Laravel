<?php

use App\Http\Controllers\LanguajeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/', [WelcomeController::class, 'index'])
    ->name('welcome');*/

/*Route::get('/languaje({lang}', [LanguajeController::class, 'switchLanguage'])
    ->name('languaje');*/

/*Route::get('/',[MailController::class, 'index'])-> name('index');
Route::get('/mailme',[MailController::class, 'mailMe'])-> name('mailme');*/

Route::get('/create', [OrderController::class, 'create'])
    ->name('orders.create');


