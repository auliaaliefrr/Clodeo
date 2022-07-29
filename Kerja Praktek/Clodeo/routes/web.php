<?php

// use App\Http\Controllers\contoh;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('upload');
})->middleware('auth');

Route::get('/upload', 'App\Http\Controllers\UploadController@index');
Route::get('/mytask', 'App\Http\Controllers\MyTaskController@index');
Route::get('/openfile', 'App\Http\Controllers\OpenFileController@index');

Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/loginproses', [UserController::class, 'loginproses'])->name('loginproses');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');


/*------------------------UPLOAD FILE----------------*/
// Route::get('/contoh', [contoh::class, 'contohupload'])->name('contoh');
// Route::post('/contoh/proses', [contoh::class, 'proses_upload'])->name('prosesupload');
// Route::get('/contoh/hapus/{id}', [contoh::class, 'hapus'])->name('hapus');
