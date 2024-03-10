<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatalogoMenu extends Model
{
    protected $table = 'catalogomenu';
    protected $primaryKey = 'IdMenu';
    protected $fillable = [
        'IdTipo',
        'IdOperacion',
        'Dependencia',
        'TextoOpcion',
        'Icono',
        'Ubicacion',
    ];
}
