<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class operaciones extends Model
{
    protected $table = 'operaciones';
    protected $primaryKey = 'Id_Operacion';
    protected $fillable = [
        'Operacion',
    ];
}
