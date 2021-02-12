<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;

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


Route::get("users",[Users::class,'index']);

Route::view("home",'hello')->middleware('protectedPage');
Route::view("interdit",'noAccess');
Route::view("about",'about');




//Route::get("URL/{parameter}",[ControllerName::class,'functionName']);


