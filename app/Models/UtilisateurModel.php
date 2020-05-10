<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UtilisateurModel extends Model
{
    protected $table="utilisateur";
    public $timestamps=false;
    protected $fillable=[
        'login',
        'motdepasse',
        'nom',
        'numero_profil',
        'numero_statut_compte',
        'prenom',
        'date_activation_compte',
        'date_desactivation_compte',

    ];
    //
}
