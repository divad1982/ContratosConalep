<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatalogoFormalizacion extends Model
{
    protected $table = 'catalogoformalizacion';
    protected $primaryKey = 'IdMedioFormalizacion';
    protected $fillable = [
        'MedioFormalizacion',
    ];
}
