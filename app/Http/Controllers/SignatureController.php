<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignatureController extends Controller
{
    public function signatureview(){
        return view('Signature');
    }
    public function signer(Request $request){  
    if(!empty($request->input('signaturesubmit'))){
       $signature = $request->input('signature');
       $signatureFileName = uniqid().'.png';
       $signature = str_replace('data:image/png;base64,', '', $signature);
       $signature = str_replace(' ', '+', $signature);
       $data = base64_decode($signature);
       $file = 'C:\xampp\htdocs\laravel\project\signatures/'.$signatureFileName;
       file_put_contents($file, $data);
       $msg = "<div class='alert alert-success'>Signature Uploaded</div>";
         echo "Votre signature est bien sauvgarder";
    }
    }
}
