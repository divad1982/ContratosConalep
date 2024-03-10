<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatalogoClasificacionContrato extends Model
{
    protected $table = 'catalogoclasificacioncontrato';
    protected $primaryKey = 'IdClasificacionContrato';
    protected $fillable = [
        'ClasificacionContrato',
    ];
}
