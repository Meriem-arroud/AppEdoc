<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use App\Models\fichier;


class AdminController extends Controller
{
    function login(Request $req){
       
        $admin = DB::table('admins')->where('email',$req->email )->first();

        if( !  $admin || !Hash::check($req->pass,  $admin->password)){

          
           return view('loginadmin');
        }else{

            $req->session()->put('admin',  $admin);

       return  redirect('ProfileAdmin');
        
        }       
    }

    public static function notification_list()
    {

      $notifications= DB::table('notifications')->select('data')->get();

        foreach ($notifications as $notification) {
          echo "<li><a class='dropdown-item' href='#'>" .$notification->data. "</a></li>";
        }

    }

    public static function count_notifications()
    {
      $notifications= DB::table('notifications')->count();
      return $notifications;
    }


}