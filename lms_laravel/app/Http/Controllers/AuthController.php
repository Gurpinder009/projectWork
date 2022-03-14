<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function authUser(Request $request){
        $credentials = $request->validate([
            'u_email'=>"required",
            "u_password"=>"required",
            "remember_user"=>"required"
        ]);
        if(Auth::guard('user')->attempt([
            "email"=>$credentials['u_email'],
            "password"=>$credentials['u_password'],
            "role_id"=>3
        ],)){
            $request->session()->regenerate();
            return redirect()->intended('/')->with("success",Auth::guard()->user());
        }
        return back()->withErrors(['error'=>"credentials don't match"]);
    }

    //auth of admin
    public function authAdmin(Request $request){
        $credentials = $request->validate([
            'u_email'=>"required",
            "u_password"=>"required",
            
        ]);

        if(Auth::guard('admin')->attempt([
            "email"=>$credentials['u_email'],
            "password"=>$credentials['u_password'],
            "role_id"=>2
        ],$request->remember_user)){
            $request->session()->regenerate();
            return redirect()->intended('/')->with("success",Auth::guard()->user());
        }
        return back()->withErrors(['error'=>"credentials don't match"]);
    }


    // public function authSuperUser(Request $request){
    //     $credentials = $request->validate([
    //         'u_email'=>"required",
    //         "u_password"=>"required"
    //     ]);

    //     if(Auth::guard('admin')->attempt([
    //         "email"=>$credentials['u_email'],
    //         "password"=>$credentials['u_password'],
    //         "role_id"=>2
    //         ])){
    //         $request->session()->regenerate();
    //         return redirect()->intended('/')->with("success",Auth::guard()->user());
    //     }
    //     return back()->withErrors(['error'=>"credentials don't match"]);
    // }



    public function logout(Request $request){
        Auth::guard()->logout();
        $request->session()->invalidate();
        $request->session()->regenerate();
        return redirect('/');
    }
}

