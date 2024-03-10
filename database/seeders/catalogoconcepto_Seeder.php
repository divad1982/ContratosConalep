<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class catalogoconcepto_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('catalogoconcepto')->insert(['Concepto' => 1200, 'NombreConcepto' => 'REMUNERACIONES AL PERSONAL DE CARACTER TRANSITORIO', 'Capitulo' => 1000]);
        DB::table('catalogoconcepto')->insert(['Concepto' => 1400, 'NombreConcepto' => 'SEGURIDAD SOCIAL', 'Capitulo' => 1000]);
        DB::table('catalogoconcepto')->insert(['Concepto' => 1500, 'NombreConcepto' => 'OTRAS PRESTACIONES SOCIALES Y ECONOMICAS', 'Capitulo' => 1000]);
        DB::table('catalogoconcepto')->insert(['Concepto' => 2100, 'NombreConcepto' => 'MATERIALES DE ADMINISTRACION, EMISION DE DOCUMENTOS Y ARTICULOS OFICIALES', 'Capitulo' => 2000]);
        DB::table('catalogoconcepto')->insert(['Concepto' => 2200, 'NombreConcepto' => 'ALIMENTOS Y UTENSILIOS', 'Capitulo' => 2000]);
        DB::table('catalogoconcepto')->insert(['Concepto' => 2300, 'NombreConcepto' => 'MATERIAS PRIMAS Y MATERIALES DE PRODUCCION Y COMERCIALIZACION', 'Capitulo' => 2000]);
        DB::table('catalogoconcepto')->insert(['Concepto' => 2400, 'NombreConcepto' => 'MATERIALES Y ARTICULOS DE CONSTRUCCION Y DE REPARACION', 'Capitulo' => 2000]);
        DB::table('catalogoconcepto')->insert(['Concepto' => 2500, 'NombreConcepto' => 'PRODUCTOS QUIMICOS, FARMACEUTICOS Y DE LABORATORIO', 'Capitulo' => 2000]);
        DB::table('catalogoconcepto')->insert(['Concepto' => 2600, 'NombreConcepto' =>	'COMBUSTIBLES, LUBRICANTES Y ADITIVOS', 'Capitulo' => 2000]);
        DB::table('catalogoconcepto')->insert(['Concepto' => 2700, 'NombreConcepto' =>	'VESTUARIO, BLANCOS, PRENDAS DE PROTECCION Y ARTICULOS DEPORTIVOS', 'Capitulo' => 2000]);
        DB::table('catalogoconcepto')->insert(['Concepto' => 2800, 'NombreConcepto' =>	'MATERIALES Y SUMINISTROS PARA SEGURIDAD', 'Capitulo' => 2000]);
        DB::table('catalogoconcepto')->insert(['Concepto' => 2900, 'NombreConcepto' =>	'HERRAMIENTAS, REFACCIONES Y ACCESORIOS MENORES', 'Capitulo' => 2000]);
        DB::table('catalogoconcepto')->insert(['Concepto' => 3100, 'NombreConcepto' =>	'SERVICIOS BASICOS', 'Capitulo' => 3000]);
        DB::table('catalogoconcepto')->insert(['Concepto' => 3200, 'NombreConcepto' =>	'SERVICIOS DE ARRENDAMIENTO', 'Capitulo' => 3000]);
        DB::table('catalogoconcepto')->insert(['Concepto' => 3300, 'NombreConcepto' =>	'SERVICIOS PROFESIONALES, CIENTIFICOS, TECNICOS Y OTROS SERVICIOS', 'Capitulo' => 3000]);
        DB::table('catalogoconcepto')->insert(['Concepto' => 3400, 'NombreConcepto' =>	'SERVICIOS FINANCIEROS, BANCARIOS Y COMERCIALES', 'Capitulo' => 3000]);
        DB::table('catalogoconcepto')->insert(['Concepto' => 3500, 'NombreConcepto' =>	'SERVICIOS DE INSTALACION, REPARACION, MANTENIMIENTO Y CONSERVACION', 'Capitulo' => 3000]);
        DB::table('catalogoconcepto')->insert(['Concepto' => 3600, 'NombreConcepto' =>	'SERVICIOS DE COMUNICACION SOCIAL Y PUBLICIDAD', 'Capitulo' => 3000]);
        DB::table('catalogoconcepto')->insert(['Concepto' => 3700, 'NombreConcepto' =>	'SERVICIOS DE TRASLADO Y VIATICOS', 'Capitulo' => 3000]);
        DB::table('catalogoconcepto')->insert(['Concepto' => 3800, 'NombreConcepto' =>	'SERVICIOS OFICIALES', 'Capitulo' => 3000]);
        DB::table('catalogoconcepto')->insert(['Concepto' => 3900, 'NombreConcepto' =>	'OTROS SERVICIOS GENERALES', 'Capitulo' => 3000]);
        DB::table('catalogoconcepto')->insert(['Concepto' => 4100, 'NombreConcepto' =>	'TRANSFERENCIAS INTERNAS Y ASIGNACIONES AL SECTOR PUBLICO', 'Capitulo' => 4000]);
        DB::table('catalogoconcepto')->insert(['Concepto' => 4300, 'NombreConcepto' =>	'SUBSIDIOS Y SUBVENCIONES', 'Capitulo' => 4000]);
        DB::table('catalogoconcepto')->insert(['Concepto' => 4400, 'NombreConcepto' =>	'AYUDAS SOCIALES', 'Capitulo' => 4000]);
        DB::table('catalogoconcepto')->insert(['Concepto' => 5100, 'NombreConcepto' =>	'MOBILIARIO Y EQUIPO DE ADMINISTRACION', 'Capitulo' => 5000]);
        DB::table('catalogoconcepto')->insert(['Concepto' => 5200, 'NombreConcepto' =>	'MOBILIARIO Y EQUIPO EDUCACIONAL Y RECREATIVO', 'Capitulo' => 5000]);
        DB::table('catalogoconcepto')->insert(['Concepto' => 5300, 'NombreConcepto' =>	'EQUIPO E INSTRUMENTAL MEDICO Y DE LABORATORIO', 'Capitulo' => 5000]);
        DB::table('catalogoconcepto')->insert(['Concepto' => 5400, 'NombreConcepto' =>	'VEHICULOS Y EQUIPO DE TRANSPORTE', 'Capitulo' => 5000]);
        DB::table('catalogoconcepto')->insert(['Concepto' => 5500, 'NombreConcepto' =>	'EQUIPO DE DEFENSA Y SEGURIDAD', 'Capitulo' => 5000]);
        DB::table('catalogoconcepto')->insert(['Concepto' => 5600, 'NombreConcepto' =>	'MAQUINARIA, OTROS EQUIPOS Y HERRAMIENTAS', 'Capitulo' => 5000]);
        DB::table('catalogoconcepto')->insert(['Concepto' => 5700, 'NombreConcepto' =>	'ACTIVOS BIOLOGICOS', 'Capitulo' => 5000]);
        DB::table('catalogoconcepto')->insert(['Concepto' => 5800, 'NombreConcepto' =>	'BIENES INMUEBLES', 'Capitulo' => 5000]);
        DB::table('catalogoconcepto')->insert(['Concepto' => 5900, 'NombreConcepto' =>	'ACTIVOS INTANGIBLES', 'Capitulo' => 5000]);
        DB::table('catalogoconcepto')->insert(['Concepto' => 6100, 'NombreConcepto' =>	'OBRA PUBLICA EN BIENES DE DOMINIO PUBLICO', 'Capitulo' => 6000]);
        DB::table('catalogoconcepto')->insert(['Concepto' => 6200, 'NombreConcepto' =>	'OBRA PUBLICA EN BIENES PROPIOS', 'Capitulo' => 6000]);
        DB::table('catalogoconcepto')->insert(['Concepto' => 6300, 'NombreConcepto' =>	'PROYECTOS PRODUCTIVOS Y ACCIONES DE FOMENTO', 'Capitulo' => 6000]);
        DB::table('catalogoconcepto')->insert(['Concepto' => 8300, 'NombreConcepto' =>	'APORTACIONES', 'Capitulo' => 8000]);

    }
}
