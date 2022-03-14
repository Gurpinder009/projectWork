<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    $data = DB::table('users')->get();
    return view('home')->with(["data"=>$data]);
})->middleware("auth:admin");

Route::get('/login', [UserController::class,"login_form"])->name('login');
Route::post('/auth', [AuthController::class,"authAdmin"]);
Route::get('/logout', [AuthController::class,"logout"])->name('logout')->middleware("auth:admin");


