<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// this is Route controller for AUTH
Route::get('/Register',[AuthController::class,'showRegiter'])->name('show.register');
Route::get('/Login',[AuthController::class,'showLogin'])->name('show.login');
Route::post('/Register',[AuthController::class,'regiter'])->name('register');
Route::post('/logout',[AuthController::class,'logout'])->name('logout');

// logout routes
Route::post('/Login',[AuthController::class,'login'])->name('login');


// this is route resrouce for the CRUD operation of Task
Route::resource('/home',TaskController::class)->middleware('auth');