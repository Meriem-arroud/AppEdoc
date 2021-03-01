<?php

use App\Http\Controllers\FileController;
use App\Http\Controllers\Mailcontroller;
use App\Http\Controllers\SignatureController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VueController;
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
Route::get('/home', function () {
    return view('Home');
});
Route::view('/', 'login');
Route::post('/login', [UserController::class, 'login']);
Route::view('/loginadmin', 'loginadmin');
Route::post('/loginadmin', [AdminController::class, 'login']);
Route::view('ProfilAdmin', 'ProfilAdmin');
Route::view('profile', 'profile');
Route::view('vue', 'vue');

Route::view('vue', 'vue');
//Route::view('principal','principal');

Route::get('logout', function () {
    session()->forget('user');
    return view('login');
});

Route::middleware(['route'])->group(function () {
    Route::view('profile', 'profile');
});
Route::get('addfile', [FileController::class, 'index'])->name('addfile');
Route::post('addfile', [FileController::class, 'store']);
Route::get('getfile', [FileController::class, 'get']);
Route::get('getfile/search', [FileController::class, 'search'])->name('live_search.search');

Route::get('dar/{file}', [VueController::class, 'show']);
Route::get('files/{file}', [FileController::class, 'show']);
Route::get('/contact', [Mailcontroller::class, 'contact']);
Route::post('/contact', [Mailcontroller::class, 'mailsend']);
Route::get('/signer', [SignatureController::class, 'signatureview']);
Route::post('/signer', [SignatureController::class, 'signer']);

//***************************************************
Route::get('addfileAdmin', [FileController::class, 'indexAdmin'])->name('addfileAdmin');
Route::post('addfileAdmin', [FileController::class, 'store']);
Route::get('getfileAdmin', [FileController::class, 'getAdmin']);
Route::get('getfileAdmin/search', [FileController::class, 'searchAdmin'])->name('live_searchAdmin.search');
Route::get('edit/{id_document}', [FileController::class, 'editDocument']);
Route::post('updatefile/{id_document}', [FileController::class, 'upDateDocument']);
Route::get('delete/{id_document}', [FileController::class, 'deleteDocument']);
Route::get('archive/{id}', [FileController::class, 'archiverDoc']);
Route::get('getArchivedDocs', [FileController::class, 'getArchivedDocs']);
Route::get('getArchivedDocs/search', [FileController::class, 'searchArchivedDocs'])->name('SearchArchivedDocs.search');
Route::get('deleteArchive/{id_doc}', [FileController::class, 'deleteArchivedDoc']);
//***************************************************

Route::get('getUsers', [UserController::class, 'getUsers']);
Route::get('getUsers/search', [UserController::class, 'search'])->name('liveSearch.search');

Route::get('markAsRead', function () {
    $admin = \App\Models\User::find(1);
    $admin->unreadNotifications->markAsRead();
    return redirect()->back();
})->name('markRead');

Route::get('adminLogout', function () {
    session()->forget('admin');
    return view('login');
});
