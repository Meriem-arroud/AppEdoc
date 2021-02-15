<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VueController extends Controller
{
    function show($file){
          return Response()->download('uploadedfile/'.$file);
    
    }
}
