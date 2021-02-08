<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class SendEmailController extends Controller
{
   public function index(){
       return view('home');
   }
   public function contact(Request $request){
    return view('contact');
}


}
