<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    function login(Request $req){
       
        $user = DB::table('users')->where('email',$req->email )->first();

        if( !$user || !Hash::check($req->pass,$user->password)){

            return'password or eai not matched';
        }else{

            $req->session()->put('user',$user);
            

    return  redirect('profile');
     }
     
      
}
}