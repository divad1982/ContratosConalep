<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatalogoTipoProovedor extends Model
{
    protected $table = 'catalogotipoproveedor';
    protected $primaryKey = 'IdTipoProveedor';
    protected $fillable = [
        'TipoProveedor',
    ];
}
