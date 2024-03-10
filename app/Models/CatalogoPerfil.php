<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatalogoPerfil extends Model
{
    protected $table = 'catalogoperfil';
    protected $primaryKey = 'IdPerfil';
    protected $fillable = [
        'DescripcionPerfil',
    ];
}
