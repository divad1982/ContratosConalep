<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatalogoMunicipios extends Model
{
    protected $table = 'catalogomunicipios';
    protected $primaryKey = 'IdMunicipio';
    protected $fillable = [
        'Municipio ', 
        'IdEstado',
    ];
}
