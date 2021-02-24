<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use \App\Mail\SendMail;
use Mail;
class Mailcontroller extends Controller
{
    public function contact(){
        return view('contact');
    }
    public function mailsend(Request $request)
    {
        $details = [
            'subject' =>  $request->input('subject'),
            'message' => $request->input('message'),
            'email' => $request->input('email'),
            'file' =>$request->file('docx')
        ];
        \Mail::to($details["email"])->send(new \App\Mail\SendMail($details));
        return redirect()->back()->with('succes_added','Le document est bien envoyee!!');
    }
}
