<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatalogoConcepto extends Model
{
    protected $table = 'catalogoconcepto';
    protected $primaryKey = 'Concepto';
    protected $fillable = [
        'Capitulo',
        'NombreConcepto',
    ];
}
