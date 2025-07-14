<?php

use Illuminate\Support\Facades\Route;

//routes static
Route::view('/about', 'lading.about') ->name('about');
Route::view('/contact', 'lading.contact') ->name('contact');
Route::view('/', 'lading.index')->name('index');
Route::view('/services', 'lading.services') ->name('services');

