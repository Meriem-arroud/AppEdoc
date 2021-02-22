<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docarchive extends Model
{
    use HasFactory;

    protected $table="docarchives";
   protected $fillable=['name','file','type','taille','departement','date']; 
}
