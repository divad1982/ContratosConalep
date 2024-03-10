<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatalogoDelegaciones extends Model
{
    protected $table = 'catalogodelegaciones';
    protected $primaryKey = 'IdDelegacion';
    protected $fillable = [
        'Delegacion', 
        'IdMunicipio',
    ];
}
