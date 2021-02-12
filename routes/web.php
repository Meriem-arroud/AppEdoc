<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\VueController;

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
Route::view('/login', 'login');
Route::post('/login', [UserController::class,'login']);

Route::view('profile','profile');
//Route::view('principal','principal');

Route::get('logout', function () {
    session()->forget('user');
    return view('login');
});

Route::middleware(['route'])->group(function () {
    Route::view('profile','profile');
});
Route::get('addfile',[FileController::class,'index'])->name('addfile');
Route::post('addfile', [FileController::class,'store']);
Route::get('getfile', [FileController::class,'get']);
Route::get('dar/{file}', [VueController::class,'show']);

Route::get('files/{file}', [FileController::class,'show']);
