<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mailcontroller;
use App\Mail\SendMail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|Route::get('/', function () {
  return view('SendEmail');
   // return redirect("about");
 });

*/



Route::view("master",'master');
Route::view("about",'about');

//Route::get('/', 'Homecontroller@index');
/*Route::get('/about', function () { 
  echo "Hello";
});*/

Route::get('/send-mail',[Mailcontroller::class,'mailsend']);