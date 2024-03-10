<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatalogoOperacion extends Model
{
    protected $table = 'catalogooperaciones';
    protected $primaryKey = 'IdOperacion';
    protected $fillable = [
        'Operacion',
    ];
}
