<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatalogoTipoDuracionContrato extends Model
{
    protected $table = 'catalogotipoduracioncontrato';
    protected $primaryKey = 'IdTipoDuracionContrato';
    protected $fillable = [
        'TipoDuracionContrato',
    ];
}
