<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaysModel extends Model
{protected $table="pays";
    public $timestamps=false;
    protected $fillable=[
        'code_pays',
        'libelle_pays',

    ];
    //
}
