<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\auth\LoginRequest;
use App\Http\Requests\auth\RegisterRequest;


use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function viewLogin() {

        return view('auth.login_register');
    }

    public function login(LoginRequest $request) {
        $credentials = [
            'email' => $request -> email,
            'password' => $request -> password,

        ];

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->route('/');
        }
        
        return redirect()->route('auth.login');
    } 
    
    public function register() {

    }

    public function logout() {

    }
}
