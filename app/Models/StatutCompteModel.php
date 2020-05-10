<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StatutCompteModel extends Model
{
    //
    protected $table="statut_compte";
    public $timestamps=false;
    protected $fillable=[
       
        'numero_statutcompte',
        'libelle_statutcompte',

    ];
}
