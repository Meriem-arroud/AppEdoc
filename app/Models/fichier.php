<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fichier extends Model
{
   protected $table="fichiers";
   protected $fillable=['name','file','type','taille','departement','date'];
}