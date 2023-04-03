<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('login');
});


Route::get('/register', 'App\Http\Controllers\RegisterController@index');
Route::get('/home', 'App\Http\Controllers\HomeController@index');
Route::get('/write', 'App\Http\Controllers\WriteController@index');
