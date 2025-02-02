<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// this is Route controller for AUTH
Route::get('/Register',[AuthController::class,'showRegiter'])->name('show.register')->middleware('guest');
Route::get('/Login',[AuthController::class,'showLogin'])->name('show.login')->middleware('guest');
Route::post('/Register',[AuthController::class,'regiter'])->name('register')->middleware('guest');
Route::post('/Login',[AuthController::class,'login'])->name('login')->middleware('guest');



// logout routes
Route::post('/logout',[AuthController::class,'logout'])->name('logout');


// this is route resrouce for the CRUD operation of Task
Route::resource('/home',TaskController::class)->middleware('auth');