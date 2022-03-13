<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\DB;
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

Route::get('/', function () {
    $data = DB::table('users')->get();
    return view('home')->with(["data"=>$data]);
})->middleware("auth:user");

Route::get('/login', [UserController::class,"login_form"])->name('login');
Route::post('/auth', [UserController::class,"auth"]);
Route::get('/logout', [UserController::class,"logout"])->name('logout')->middleware("auth:user");


