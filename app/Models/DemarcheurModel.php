<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DemarcheurModel extends Model
{protected $table="demarcheur";
    public $timestamps=false;
    protected $fillable=[
        'email',
        'nom',
        'prenom',
        'siege_indi_geo',
        'societe',
        'code_pays',
        'chemin_fichier',
        'identifiant_fiscal',
        'tel1',
        'tel2',

    ];
    //
}
