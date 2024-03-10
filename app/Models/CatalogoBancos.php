<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatalogoBancos extends Model
{
    protected $table = 'catalogobancos';
    protected $primaryKey = 'IdBanco';
    protected $fillable = [
        'BancoCorto', 
        'IdDelegacion',
    ];
}
