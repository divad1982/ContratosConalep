<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipos extends Model
{
    protected $table = 'tipos';
    protected $primaryKey = 'Id_Tipo';
    protected $fillable = [
        'Des_Tipo',
    ];
}
