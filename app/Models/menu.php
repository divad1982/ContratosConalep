<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    protected $table = 'menu';
    protected $primaryKey = 'Id_Menu';
    protected $fillable = [
        'Id_Tipo',
        'Id_Operacion',
        'Dependencia',
        'Texto_opcion',
        'Icono',
        'Ubicacion',
    ];
}
