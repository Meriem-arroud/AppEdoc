<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Hash;
class AdminController extends Controller
{
    function login(Request $req){
       
        $admin = DB::table('admin')->where('email',$req->email )->first();

        if( !  $admin || !Hash::check($req->pass,  $admin->password)){

          
           return view('loginadmin');
        }else{

            $req->session()->put('admin',  $admin);
            

    return  redirect('ProfileAdmin');
     }
     
}
}