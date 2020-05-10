<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeoffreModel extends Model
{
    //
    protected $table="type_offre";
    public $timestamps=false;
    protected $fillable=[
        'id_offre',
        'libelle_offre',
       

    ];
}
