<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MaisonLocatModel extends Model
{ protected $table="locat_maison";
    public $timestamps=false;
    protected $fillable=[
        'id_maison',
        'code_quartier',
        'code_ville',
        'code_pays',
        'independante',
        'nbre_piece',
        'type_offre',
        'prix_min',
        'indication_geographique',
        'surface',
        'surface_sejour',
        'observation',
        'login',

    ];
    //
}
