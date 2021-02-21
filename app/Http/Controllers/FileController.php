<?php

namespace App\Http\Controllers;
use App\Models\fichier;
use App\Models\Type;
use App\Models\Departement;
use Illuminate\Http\Request;

use DB;
use Dotenv\Validator;
use  Illuminate\Support\Facades\Response;
use League\CommonMark\Block\Element\Document;
use Symfony\Contracts\Service\Attribute\Required;

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
       
       // return redirect()->route('addfile');
       return back()->with('succes_added','Le document est bien ajouté!!');

       }
      
    
        
       
        function get(){
           
           if (DB::table('fichiers')->where('departement', session('user')->département)->exists()) {
            
           $downoald = DB::table('fichiers')->where('departement', session('user')->département)->get();
            
            return view('principal',compact('downoald'));
         
        }
           
    
            }      
           
        
//********************************************************************************************* */           
        function show($file){
            $fichier=$file;
    
          header('Content-type: application/pdf');
         readfile('uploadedfile/'. $fichier);
        }
//********************************************************************************************* */
        function getAdmin()
           {
            $downoald=DB::table('fichiers')->get();
    
            return view('principalAdmin',compact('downoald'));
            }
//********************************************************************************************* */
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
          $req->validate([
              'name'=>'required',
              'type'=>'required',
              'depart'=>'required',
          ]);

          
            $id=fichier::find($id_document);//check if this id exists in database
            $file3=new Type();
            $file3->type=$req->type;
            $type= $file3->type;
            if(!$id)
            return redirect()->back();
            //update data
            $id->update([
                'departement'=>$req->depart,
                'name'=>$req->name,
                'type'=>'images/'. $type.'.png',

            ]);
          
            return redirect()->back()->with('succes_update','Le document est bien modifié!!');
           }
     //********************delete document**************************************************
     function deleteDocument(Request $request,$id_document)
     {
      $id=fichier::find($id_document);//check if this id exists in database
      
     if(!$id)
     return redirect()->back();

     $id->delete();
     return redirect()->back()->with('succes_delete','Le document est bien supprimer!!');
      
     }   
     //**************************search for documents admin******************************************
     function searchAdmin(Request $request)
        {
         if($request->ajax())
         {
          $output = '';
          $query = $request->get('query');
          if($query != '')
          {
           $data = DB::table('fichiers')->where('name', 'like', '%'.$query.'%')->get();
          }
          else
          {
           $data = DB::table('fichiers')->get();
          }
          $total_row = $data->count();
          if($total_row > 0)
          {
           foreach($data as $row)
           {
            $output .= '
            <tr>
             <td>'.$row->name.'</td>
             <td><img src="'.$row->type.'"></td>
             <td>'.$row->taille.'</td>
             <td>'.$row->departement.'</td>
             <td>'.$row->date.'</td>
             <td><a href="edit/'.$row->id.'"><button type="button">modifier</button></a></td>
             <td><a href="delete/'.$row->id.'"><button type="button">supprimer</button></a></td>
             <td><a href=""><button type="button">arrchiver</button></a></td>
            </tr>
            ';
           }
          }

          else
          {
           $output = '
           <tr>
            <td align="center"  colspan="8">Aucune resultat</td>
           </tr>
           ';
          }
          $data = array(
           'table_data'  => $output,
           'total_data'  => $total_row
          );
    
          echo json_encode($data);
         }
        
        }
    
        
        
     //**************************end of serach for documents admin******************************************
      
}

