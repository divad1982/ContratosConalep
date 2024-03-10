<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatalogoTipoIdentificacion extends Model
{
    protected $table = 'catalogotipoidentificacion';
    protected $primaryKey = 'IdTipoIdentificacion';
    protected $fillable = [
        'TipoIdentificacion',
    ];
}
