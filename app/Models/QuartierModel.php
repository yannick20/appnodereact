<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuartierModel extends Model
{
    //
    protected $table="quartier";
    public $timestamps=false;
    protected $fillable=[
        'code_quartier',
        'libelle_quartier',
        'code_ville',
        
    

    ];
}
