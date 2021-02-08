<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Mail\SendMail;
class Mailcontroller extends Controller
{
    public function mailsend()
    {
        $details = [
            'title' => 'Mail from Smac edoc',
            'body' => 'Message'
        ];

        \Mail::to('arroudmeriem@gmail.com')->send(new SendMail($details));
        return view('emails.thanks');
    }
}
