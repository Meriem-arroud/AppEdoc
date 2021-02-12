<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VueController extends Controller
{
    function show($file){
      

     // header('Content-type: application/msword');
     //readfile('uploadedfile/1612907093.doc');
    
   /*  if(!$fp = file_get_contents('uploadedfile/1612907043.docx')) 
     echo 'La lecture du fichier a échoué !'; 
else 
     echo $fp; 
       // return view('vue',compact('fichier'));
       header('Content-disposition: inline');
      header('Content-type: application/msword'); //not sure if this is the correct MIME type
           readfile('uploadedfile/1612907043.docx');*/
        //   echo '<a href="uploadedfile/1612873206.pdf">tttt</a>';
       
          return Response()->download('uploadedfile/'.$file);
    
    }
}
