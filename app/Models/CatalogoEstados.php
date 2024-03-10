<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatalogoEstados extends Model
{
    protected $table = 'catalogoestados';
    protected $primaryKey = 'IdEstado';
    protected $fillable = [
        'Estado',
    ];
}
