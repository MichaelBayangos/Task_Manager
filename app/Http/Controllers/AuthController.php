<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showRegiter(){
        return view("auth.register");
    }
    public function showLogin(){
        return view("auth.login");
    }
}
