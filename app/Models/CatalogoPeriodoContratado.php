<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatalogoPeriodoContratado extends Model
{
    protected $table = 'catalogoperiodocontrato';
    protected $primaryKey = 'IdPeriodoContrato';
    protected $fillable = [
        'PeriodoContrato',
    ];
}
