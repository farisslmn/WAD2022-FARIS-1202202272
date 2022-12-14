<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ShowroomsController;
use Database\Seeders\ShowroomsSeeder;
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
    return view('home');
});
route::resource("/mycar",ShowroomsController::class)->middleware('auth');

route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
route::post('/login', [LoginController::class,'login']);
route::post('/logout', [LoginController::class,'logout']);

route::get('/register',[RegisterController::class,'index'])->middleware('guest');
route::post('/register',[RegisterController::class,'store']);

