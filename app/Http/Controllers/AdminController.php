<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use App\Models\fichier;
use App\Models\Admin;
use Illuminate\Notifications\Notifiable;


class AdminController extends Controller
{
    

    public static function notification_list()
    {
      $admin = \App\Models\Admin::find(1);

        foreach ($admin->unreadNotifications as $notification) {
          foreach ($notification['data'] as $notif) {
          echo "<li style='background-color:lightblue'><a class='dropdown-item' href='#'>".$notif."</a></li>";
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
      $admin = \App\Models\Admin::find(1);
      if($admin->unreadnotifications->count()){
        $notifications= $admin->unreadnotifications->count();
        return $notifications;
      }
    }

}