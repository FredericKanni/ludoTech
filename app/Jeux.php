<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jeux extends Model
{
    protected $table = 'jeux';
    //si la cle primaire dans la bdd n est pas  = id il faudra preciser 
    //protected $primaryKey = 'flight_id';
    
    
    // si on veut pas de timestamp car par default il est a true ds laravel
    //public $timestamps = false


    protected $fillable = ['nom','editeur','prix','commentaire'];


    
}
