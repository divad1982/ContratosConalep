<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatalogoPartida extends Model
{
    protected $table = 'catalogopatidas';
    protected $primaryKey = 'Partida';
    protected $fillable = [
        'Concepto',
        'NombrePartida',
    ];
}
