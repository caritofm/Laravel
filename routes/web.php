<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

//routes static
Route::view('/about', 'lading.about') ->name('about');
Route::view('/contact', 'lading.contact') ->name('contact');
Route::view('/', 'lading.index')->name('index');
Route::view('/services', 'lading.services') ->name('services');

Route::get('/', [UserController::class, 'index'])-> name('user.index');
Route::get('/create', [UserController::class, 'create'])->name('user.create');

