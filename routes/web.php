<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mailcontroller;
use App\Http\Controllers\SignatureController;
use App\Mail\SendMail;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\VueController;
//use App\Notifications\RealTimeMessageNotification;
use App\Models\Admin;

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
Route::get('/test', function () {
    return view('Test');
});
Route::view('/login', 'login');
Route::post('/login', [UserController::class,'login']);
Route::view('/loginadmin', 'loginadmin');
Route::post('/loginadmin', [AdminController::class,'login']);
Route::view('ProfilAdmin', 'ProfilAdmin');
Route::view('profile','profile');
Route::view('vue','vue');

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
Route::get('getfile/search', [FileController::class,'search'])->name('live_search.search');

Route::get('dar/{file}', [VueController::class,'show']);
Route::get('files/{file}', [FileController::class,'show']);
Route::get('/contact',[Mailcontroller::class,'contact']);
Route::post('/contact',[Mailcontroller::class,'mailsend']);
Route::get('/signer',[SignatureController::class,'signatureview']);
Route::post('/signer',[SignatureController::class,'signer']);



Route::get('markAsRead',function(){  
    $admin = \App\Models\Admin::find(1);
    $admin->unreadNotifications->markAsRead();
    return redirect()->back();
})->name('markRead');



