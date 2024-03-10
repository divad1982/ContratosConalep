<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatalogoTipoMoneda extends Model
{
    protected $table = 'catalogotipomoneda';
    protected $primaryKey = 'IdTipoMoneda';
    protected $fillable = [
        'AbreviaturaTipoMoneda', 
        'TipoMoneda',
    ];
}
