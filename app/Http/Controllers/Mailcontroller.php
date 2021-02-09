<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use \App\Mail\SendMail;
class Mailcontroller extends Controller
{

    public function contact(){
        return view('contact');
    }
    public function mailsend(Request $request)
    {
        $details = [
            'title' =>  $request->input('subject'),
            'body' => $request->input('message')
        ];

        \Mail::to( $request->input('email'))->send(new SendMail($details));
        return view('emails.thanks');
    }
}
