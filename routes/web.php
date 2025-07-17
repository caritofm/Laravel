<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NoteController;

//routes static
//Route::view('/about', 'lading.about') ->name('about');
//Route::view('/contact', 'lading.contact') ->name('contact');
//Route::view('/', 'lading.index')->name('index');
//Route::view('/services', 'lading.services') ->name('services');

//Route::get('/', [UserController::class, 'index'])-> name('user.index');
//Route::get('/create', [UserController::class, 'create'])->name('user.create');

/*Route::get('/note', [NoteController::class, 'index'])-> name('note.index'); //?cuando no es extrictamente necesario, se utiliza aveces 
Route::get('/note/create',[NoteController::class, 'create'] )-> name('note.create');
Route::post ('/note/store', [NoteController::class, 'store'])-> name('note.store');
Route::get('/note/edit/{note}', [NoteController::class, 'edit']) -> name('note.edit');
Route::put('/note/update/{note}', [NoteController::class, 'update']) -> name('note.update');
Route::get('/note/show/{note}', [NoteController::class, 'show'])-> name('note.show');
Route::delete('/note/delete/{note}', [NoteController::class, 'delete']) -> name('note.delete');*/

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UsersController;

Route::get('/',[ProductController::class, 'index'])-> name('product.index');

Route::get('/', [UsersController::class, 'index'])-> name('users.index');
