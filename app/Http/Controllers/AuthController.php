<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use PhpParser\Node\Expr\Throw_;

class AuthController extends Controller
{
    public function showRegiter(){
        return view("auth.register");
    }
    public function showLogin(){
        return view("auth.login");
    }

    public function regiter(Request $request){
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8|confirmed'
        ]);
        $user =User::create($validated);
        Auth::login($user);
        return redirect()->route('home.index');
    }   
    public function login(Request $request){
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string'
        ]);
        if (Auth::attempt($validated)){
            $request->session()->regenerate();
            return redirect()->route('home.index');
        }
        throw ValidationException::withMessages([
            'credentials'=> 'Sorry, Incorrect Credentials'
        ]);
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('show.login');
    }
}
