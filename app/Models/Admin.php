<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Models\fichier;

class Admin extends Model
{
    use HasFactory, Notifiable;

    protected $table="admins";
    protected $fillable=['id','nom', 'prenom', 'email', 'password'];


}
