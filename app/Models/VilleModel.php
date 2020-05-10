<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VilleModel extends Model
{
    //
    protected $table="ville";
    public $timestamps=false;
    protected $fillable=[
        'code_ville',
        'libelle_ville',
        'code_pays',
        
    

    ];
}
