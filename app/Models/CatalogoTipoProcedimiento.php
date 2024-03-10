<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatalogoTipoProcedimiento extends Model
{
    protected $table = 'catalogotiposprocedimiento';
    protected $primaryKey = 'IdTipoProcedimiento';
    protected $fillable = [
        'TipoProcedimiento',
    ];
}
