<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function login(Request $req){
       
        $user = DB::table('users')->where('email',$req->email )->first();

        if( !$user || !Hash::check($req->pass,$user->password)){

           // return'password or email not matched';
           $status="error";
           return view('login',compact('status'));
        }else{
            if($user->id==1){
                $req->session()->put('admin',$user);
                return  redirect('ProfilAdmin');
              

            }else{

            $req->session()->put('user',$user);
            

             return  redirect('profile');}
     }    
}
    public static function notification_list()
    {
    $admin = \App\Models\User::find(1);

        foreach ($admin->unreadNotifications as $notification) {
        foreach ($notification['data'] as $notif) {
        echo "<li style='background-color:#e8dfec'><a class='dropdown-item' href='#'>".$notif."</a></li>";
        }
    }
    foreach ($admin->readNotifications as $notification) {
        foreach ($notification['data'] as $notif) {
        echo "<li><a class='dropdown-item' href='#'>".$notif."</a></li>";
        }
    }
    }

    public static function count_notifications()
    {
    $admin = \App\Models\User::find(1);
    if($admin->unreadnotifications->count()){
        $notifications= $admin->unreadnotifications->count();
        return $notifications;
    }
    }

    function getUsers(){

        $employees = DB::table('users')->where('id', '!=', 1)->get();
         
         return view('showUsers',compact('employees'));
      
     }

     function search(Request $request)
     {
      if($request->ajax())
      {
       $output = '';
       $query = $request->get('query');
       if($query != '')
       {
        $data = DB::table('users')->where('nom', 'like', '%'.$query.'%')->get();
       }
       else
       {
        $data = DB::table('users')->where('id', '!=', 1)->get();
       }
       $total_row = $data->count();
       if($total_row > 0)
       {
        foreach($data as $row)
        {
         $output .= '
         <tr>
         <td>'.$row->id.'</td>
          <td>'.$row->nom.'</td>
          <td>'.$row->prenom.'</td>
          <td>'.$row->département.'</td>
          <td>'.$row->email.'</td>
         </tr>
         ';
        }
       }
       else
       {
        $output = '
        <tr>
         <td align="center" style="width:619px;height:500px" colspan="8">Aucun resultat</td>
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
             

}