<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatalogoCapitulo extends Model
{
    protected $table = 'catalogocapitulos';
    protected $primaryKey = 'Capitulo';
    protected $fillable = [
        'NombreCapitulo',
        'DescripcionCapitulo',
    ];
}
