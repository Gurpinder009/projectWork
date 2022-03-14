<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

  
}
