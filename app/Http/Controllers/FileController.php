<?php

namespace App\Http\Controllers;
use App\Models\fichier;
use App\Models\Type;
use App\Models\Departement;
use Illuminate\Http\Request;

use DB;

use  Illuminate\Support\Facades\Response;
class FileController extends Controller
{
    function index(){
        $departement=Departement::select('id','name_departement')->get();
       $type=Type::select('id','type')->get();
        return view('addfile',compact('departement','type'));
       
    }
    function store(Request $request){
        $file=new fichier();
        $file2=new Departement();
        $file3=new Type();
        $piece=explode(".",$_FILES['fichier']['name']);
        $file->name= $piece[0];
       /* $image=$request->file('type');
      
        $imagename=time().'.'. $image->extension();
        $image->move(public_path('uploadedfile'), $imagename);
        $file->type= $imagename;*/
        $file3->type=$request->type;
        $type= $file3->type;
        
        $file->type='images/'. $type.'.png';
        $fichier=$request->file('fichier');
        $fichiername=time().'.'. $fichier->extension();
        $fichier->move(public_path('uploadedfile'), $fichiername);
        $file->file= $fichiername;
        $file->taille=$_FILES['fichier']['size'];
        $file2->name_departement=$request->depart;
        $file->departement=$file2->name_departement;
 
       
        $file->date= NOW();
        
        $file->save();
       
        return redirect()->route('addfile');
       

       }
      
    
        
       
        function get(){
           
           if (DB::table('fichiers')->where('departement', session('user')->département)->exists()) {
            
           $downoald = DB::table('fichiers')->where('departement', session('user')->département)->get();
            
            return view('principal',compact('downoald'));
         
        }
           
    
            }
           
           
        
            
        function show($file){
            $fichier=$file;
    
          header('Content-type: application/pdf');
         readfile('uploadedfile/'. $fichier);
        }
    
    
}
