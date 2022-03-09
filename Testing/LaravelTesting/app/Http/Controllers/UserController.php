<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        // $users =  DB::table('users');
        // $users = $users->addSelect('id','name','email','phone_num','password')->get();
        // $avg = $users->avg('id');
        // return response()->json([
        //     "average"=>$avg,
        //     "data"=>$users
        // ]);


        if(DB::table('users')->where("id",1)->doesntExist()){
            return response()->json("it is working ");
        }
        else{
            return response()->json("it is not working ");
        }
    }


    // public function show(){
    //     $data =DB::table("users")
    //     ->selectRaw("id + ? as id",[1])
    //     ->where("id","<",50)
    //     ->get();
    //     return response()->json($data);
    // }

    // public function show(){
    //     $data = DB::table("users")
    //     ->whereRaw("id > IF(5 < 6 , 10 , 1 )")
    //     ->get();
    //     return response()->json($data);
    // }

    // public function show(){
    //     $data = DB::table("users")
    //     ->orderByRaw("updated_at - created_at DESC")
    //     ->get();
    //     return response()->json($data);
    // }

    public function show(){
        $data = DB::table("users")
        ->selectRaw("count(*) as count")
        ->get();
        // ->count();
        return response()->json(["count"=>$data]);
    }


    public function joins(){
        $data = DB::table('users as u')
        ->select("u.user_id","u.name","u.email","u.phone_num","b.title","b.description")
        ->leftJoin("borrow_books as bb","u.user_id","=","bb.user_id")
        ->leftJoin("books as b","bb.book_id","=","b.book_id")
        ->orderBy("u.user_id","DESC")
        ->get();
        return response()->json($data);
    }

    public function login(Request $request){
    //     return response()->json(["status"=>"you are logged in with",
    // "data"=>["email"=>$request->email,"password"=>$request->password]]);

        $credentials = [
            "email"=>$request->email,
            "password"=>$request->password
        ];
        if(auth()->attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended("/home");
        }
        return "it is not working right now";

    }
}
