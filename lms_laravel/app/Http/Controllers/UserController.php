<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function create(){
        return view('login');
    }

    public function store(Request $request){
        return redirect()
        ->back()
        ->with(["success"=>"data is submitted successfully"],$request->u_email);
    }


    public function login_form(){
        return view('login');
    }

    public function auth(Request $request){
        $credentials = $request->validate([
            'u_email'=>"required",
            "u_password"=>"required"
        ]);
        if(Auth::guard('user')->attempt([
            "email"=>$credentials['u_email'],
            "password"=>$credentials['u_password']
            ])){
            $request->session()->regenerate();
            return redirect()->intended('/')->with("success",Auth::guard()->user());
        }
        return back()->withErrors(['error'=>"credentials don't match"]);

    }

    public function logout(Request $request){
        Auth::guard()->logout();
        $request->session()->invalidate();
        $request->session()->regenerate();
        return redirect()->route('login');
    }
}
