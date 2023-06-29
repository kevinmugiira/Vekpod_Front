<?php

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
    return view('welcome');
});

Route::get('index', [\App\Http\Controllers\IndexController::class, 'index']);
Route::get('home', [\App\Http\Controllers\HomeController::class, 'index']);
Route::get('player', [\App\Http\Controllers\PlayerController::class, 'index']);
Route::get('browse', [\App\Http\Controllers\PlayerController::class, 'browse']);
Route::get('chart', [\App\Http\Controllers\PlayerController::class, 'chart']);
Route::get('artist', [\App\Http\Controllers\PlayerController::class, 'artist']);
Route::get('rtl', [\App\Http\Controllers\PlayerController::class, 'rtl']);
Route::get('artistdetail', [\App\Http\Controllers\PlayerController::class, 'artistDetail']);
Route::get('trackdetail', [\App\Http\Controllers\PlayerController::class, 'trackDetail']);
Route::get('profile', [\App\Http\Controllers\PlayerController::class, 'profile']);

// auth
Route::get('singin', [\App\Http\Controllers\AuthController::class,'signIn']);
Route::get('singup', [\App\Http\Controllers\AuthController::class, 'singup']);
Route::get('forgot-password', [\App\Http\Controllers\AuthController::class, 'forgotPassword']);

// test
Route::get('test', [\App\Http\Controllers\PlayerController::class, 'test']);
