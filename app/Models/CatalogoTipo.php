<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatalogoTipo extends Model
{
    protected $table = 'catalogotipos';
    protected $primaryKey = 'IdTipo';
    protected $fillable = [
        'DescripcionTipo',
    ];
}
