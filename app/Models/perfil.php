<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perfil extends Model
{
    protected $table = 'perfil';
    protected $primaryKey = 'Id_Perfil';
    protected $fillable = [
        'Des_Perfil',
    ];
}
