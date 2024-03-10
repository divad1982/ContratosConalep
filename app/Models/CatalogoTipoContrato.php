<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatalogoTipoContrato extends Model
{
    protected $table = 'catalogotipocontrato';
    protected $primaryKey = 'IdTipoContrato';
    protected $fillable = [
        'TipoContrato',
    ];
}
