<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatalogoColonias extends Model
{
    protected $table = 'catalogocolonias';
    protected $primaryKey = 'IdColonia';
    protected $fillable = [
        'Colonia', 
        'IdDelegacion',
    ];
}
