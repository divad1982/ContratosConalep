<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class permisos extends Model
{
    protected $table = 'permisos';
    protected $primaryKey = 'Id_Permiso';
    protected $fillable = [
        'Id_Permiso',
        'Id_menu',
        'Id_Perfil',
    ];
}
