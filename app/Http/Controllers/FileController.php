<?php

namespace App\Http\Controllers;
use App\Models\fichier;
use App\Models\Type;
use App\Models\Departement;
use App\Models\Docarchive;
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
    function indexAdmin(){
        $departement=Departement::select('id','name_departement')->get();
       $type=Type::select('id','type')->get();
        return view('addfileAdmin',compact('departement','type'));
       
    }

    function store(Request $request){
        $request->validate([
            'fichier'=>'required',
         
        ]);
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
       return redirect()->back()->with('succes_added','Le document est bien ajouté!!');

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
        function search(Request $request)
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
        $data = DB::table('fichiers')->where('departement', session('user')->département)->get();
        }
        $total_row = $data->count();
        if($total_row > 0)
        {
        foreach($data as $row)
        {
            $output .= '
            <tr>
            <td>'.$row->name.'</td>
            <td><img src="'.$row->type.'"width="40" height="40"></td>
            <td>'.$row->departement.'</td>
            <td>'.$row->date.'</td>
            <td><a href="dar/'.$row->file.'"><img src="images/d.png" width="45" height="45"></a></td>
            <td><a href="files/'.$row->file.'"><img src="images/c.png" width="45" height="45"></a></td>
            </tr>
            ';
        }
        }
        else
        {
        $output = '
        <tr>
            <td align="center" colspan="7">Aucun résultat</td>
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
          
            return redirect('getfileAdmin')->with('succes_update','Le document est bien modifié!!');
           }
     //********************delete document**************************************************
     function deleteDocument(Request $request,$id_document)
     {
      $id=fichier::find($id_document);//check if this id exists in database
      
     if(!$id)
     return redirect()->back();

     $id->delete();
     return redirect()->back()->with('succes_delete','Le document est bien supprimé!!');
      
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
             <td><a href="files/'.$row->file.'"><button class="button" type="button"><i class="fas fa-eye"></i></i></button></a></td>
             <td><a href="edit/'.$row->id.'"><button class="button" type="button"><i class="fas fa-edit"></i></button></a></td>
             <td><a href="delete/'.$row->id.'"><button class="button" type="button"><i class="fas fa-trash"></i></button></a></td>
             <td><a href="archive/'.$row->id.'"><button class="button" type="button"><i class="fas fa-file-archive"></i></button></a></td>
            </tr>
            ';
           }
          }
          else
          {
           $output = '
           <tr>
            <td align="center" style="width:1020px;height:500px;" colspan="8">Aucun résultat</td>
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


    /***********Archiver un document**************/
    public function archiverDoc($idDoc)
{
      
    $first = fichier::where('id', $idDoc)->first(); //this will select the row with the given id
    //now we save the data in the variables;
    $name = $first->name;
    $file = $first->file;
    $type = $first->type;
    $taille = $first->taille;
    $depart = $first->departement;
    $date = $first->date;
    $first->delete();

    $second = new Docarchive();
     $second->name=$name;
     $second->file=$file;
     $second->type=$type;
     $second->taille=$taille;
     $second->departement=$depart;
     $second->date=$date;
    $second->save();

    return redirect()->back()->with('succes_archive','Le document est bien archivé!!');

}

    /***********Afficher les documents archivés**************/
    function getArchivedDocs(){

        $archivedDocs = DB::table('docarchives')->get();
         
         return view('showArchivedDocs',compact('archivedDocs'));
      
     }
   /***********charcher dans les documents archivés**************/
    function searchArchivedDocs(Request $request){
        if($request->ajax())
         {
          $output = '';
          $query = $request->get('query');
          if($query != '')
          {
           $data = DB::table('docarchives')->where('name', 'like', '%'.$query.'%')->get();
          }
          else
          {
           $data = DB::table('docarchives')->get();
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
             <td><a href="files/'.$row->file.'"><button class="button" type="button"><i class="fas fa-eye"></i></i></button></a></td>
             <td><a href="deleteArchive/'.$row->id.'"><button class="button" type="button"><i class="fas fa-trash"></i></button></a></td>
            </tr>
            ';
           }
          }
          else
          {
           $output = '
           <tr>
            <td align="center" style="width:950px;height:500px;" colspan="8">Aucun résultat</td>
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

     //********************delete archived document**************************************************
     function deleteArchivedDoc($id_doc)
     {
      $id=Docarchive::find($id_doc);//check if this id exists in database
      
     if(!$id)
     return redirect()->back();

     $id->delete();
     return redirect()->back()->with('succes_delete','Le document est bien supprimé!!');
      
     }   

      
}
