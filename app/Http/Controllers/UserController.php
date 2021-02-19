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

           // return'password or email not matched';
           $status="error";
           return view('login',compact('status'));
        }else{
            if($user->id==4){
                $req->session()->put('admin ',$user);
                return  redirect('ProfilAdmin');
              

            }else{

            $req->session()->put('user',$user);
            

             return  redirect('profile');}
     }
     
      
}
}