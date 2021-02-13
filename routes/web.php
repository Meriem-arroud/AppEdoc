<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mailcontroller;
use App\Http\Controllers\SignatureController;
use App\Mail\SendMail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!

*/

Route::get('/contact',[Mailcontroller::class,'contact']);
Route::post('/contact',[Mailcontroller::class,'mailsend']);

Route::get('/signer',[SignatureController::class,'signatureview']);
Route::post('/signer',[SignatureController::class,'signer']);
