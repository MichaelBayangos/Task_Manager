<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// this is Route controller for AUTH
Route::get('/Register',[AuthController::class,'showRegiter'])->name('show.register');
Route::get('/LogIn',[AuthController::class,'showLogin'])->name('show.login');

// this is route resrouce for the CRUD operation of Task
Route::resource('/home',TaskController::class);