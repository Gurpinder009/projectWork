<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', function(){
    return view('login');
})->name('login');

Route::get("/home",function(){
    return view('home');
})->middleware('auth')->name('home');
Route::get("/users",[UserController::class,"show"]);
Route::get("/joins",[UserController::class,"joins"]);
Route::get("/books",[BookController::class,"show"]);
Route::post("/login",[UserController::class,"login"])->name('login');
