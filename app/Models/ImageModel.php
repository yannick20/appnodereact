<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImageModel extends Model
{
    //
    protected $table="image";
    public $timestamps=false;
    protected $fillable=[
        'code_image',
        'id_maison',
        'nom_stockage',
        'title_image',
        

    ];
}
