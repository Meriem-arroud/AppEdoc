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

        function getAdmin()
           {
            $downoald=DB::table('fichiers')->get();
    
            return view('principalAdmin',compact('downoald'));
            }

        function editDocument($id_document)
        {
         $id=fichier::find($id_document);//check if this id exists in database
         $departement=Departement::select('id','name_departement')->get();
         $type=Type::select('id','type')->get();
        if(!$id)
        return redirect()->back();
        return view('edit',compact('id','departement','type'));
         
        }
    //********************update document**************************************************
        function upDateDocument(Request $req,$id_document)
           {
            $id=fichier::find($id_document);//check if this id exists in database
           
            if(!$id)
            return redirect()->back();
            //update data
            $id->update([
                'departement'=>$req->depart,
                'name'=>$req->name,
            ]);
          
            return redirect()->back();
           }
     //********************delete document**************************************************
     function deleteDocument(Request $request,$id_document)
     {
      $id=fichier::find($id_document);//check if this id exists in database
      
     if(!$id)
     return redirect()->back();

     $id->delete();
     return redirect()->back();
      
     }   
     //**************************serach for documents******************************************

     function search()
     {
         //$search_text=$req->get('text');
         //$documents=DB::table('fichiers')->where('name','like','%'.$search_text.'%')->pagination(5);
         $search_text=$_GET['text'];
         $documents=fichier::where('name','LIKE','%'.$search_text.'%')->get();
         return view('searchPage',compact('documents'));
         
     }
    
    
}
