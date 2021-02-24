<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Notification;
use App\Notifications\RealTimeMessageNotification;
use App\Models\User;
use DB;



class fichier extends Model
{

   protected $table="fichiers";
   protected $fillable=['name','file','type','taille','departement','date']; 
   
       public static function boot(){
         parent::boot();
         static::created(function($model){
         // $userID = DB::table('users')->select('id')->get();
         $admin = User::find(1);
         if(!$admin){
         $admin->notify(new RealTimeMessageNotification($model));
         }
        });
      } 

}