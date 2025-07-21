<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\InfoControler;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/', [InfoControler::class, 'index'])->name('index');
Route::get('/create', [InfoControler::class, 'create'])->name('create');
Route::post('/store', [InfoControler::class, 'store'])->name('store');
