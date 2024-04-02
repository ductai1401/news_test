<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\auth\LoginRequest;
use App\Http\Requests\auth\RegisterRequest;
use App\Models\User;


use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function viewLogin() {
        if(Auth::check()){
            return redirect()->back();
        }

        return view('auth.login');
    }

    public function login(LoginRequest $request) {
        $credentials = [
            'email' => $request -> email,
            'password' => $request -> password,
            'status' => 1,

        ];

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->route('index');
        }
        
        return redirect()->route('auth.login');
    } 
    

    public function viewRegister() {
        if(Auth::check()){
            return redirect()->back();
        }

        return view('auth.register');
    }


    public function register(RegisterRequest $request) {
        $user = new User();

        $user -> email = $request ->email;
        $user -> fullname = $request -> fullname;
        $user -> phone = $request -> phone;
        $user -> password= bcrypt($request -> password);
        $user -> level = 2;
        

        $user->save();

        return redirect()->route('auth.login')->with('success', 'Successful account registration');
    }

    public function logout(Request $request) {
        Auth::logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        
        return redirect()-> route('auth.viewLogin');
    }
}
