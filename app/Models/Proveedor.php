<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table = 'proveedores';
    protected $primaryKey = 'IdProveedor';
    protected $fillable = [
        'Rfc',
        'Domicilio',
        'IdEstado',
        'Telefono',
        'Correo',
        'IdTipoProveedor',
        'RfcRepresentanteLegal',
        'NombreRepresentanteLegal',
        'IdTipoIdentificacion',
        'ActaConstitutiva',
        'PoderNotarial',
        'RFC/Cedula',
        'ComprobanteDomicilio',
        'Identificacion',
    ];
}
