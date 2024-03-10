<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatalogoPermiso extends Model
{
    protected $table = 'catalogopermisos';
    protected $primaryKey = 'IdPermiso';
    protected $fillable = [
        'IdMenu',
        'IdPerfil',
    ];
}
