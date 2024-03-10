<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class catalogocapitulo_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('catalogocapitulos')->insert(['Capitulo' => 1000, 'NombreCapitulo' => 'SERVICIOS PERSONALES', 'DescripcionCapitulo' => 'SERVICIOS PERSONALES']);
        DB::table('catalogocapitulos')->insert(['Capitulo' => 2000,	'NombreCapitulo' => 'MATERIALES Y SUMINISTROS', 'DescripcionCapitulo' =>  'MATERIALES Y SUMINISTROS']);
        DB::table('catalogocapitulos')->insert(['Capitulo' => 3000,	'NombreCapitulo' => 'SERVICIOS GENERALES', 'DescripcionCapitulo' =>  'SERVICIOS GENERALES']);
        DB::table('catalogocapitulos')->insert(['Capitulo' => 4000,	'NombreCapitulo' => 'TRANSFERENCIAS, ASIGNACIONES, SUBSIDIOS Y OTRAS AYUDAS', 'DescripcionCapitulo' =>  'TRANSFERENCIAS, ASIGNACIONES, SUBSIDIOS Y OTRAS AYUDAS']);
        DB::table('catalogocapitulos')->insert(['Capitulo' => 5000,	'NombreCapitulo' => 'BIENES MUEBLES, E INTANGIBLES', 'DescripcionCapitulo' =>  'BIENES MUEBLES, E INTANGIBLES']);
        DB::table('catalogocapitulos')->insert(['Capitulo' => 6000,	'NombreCapitulo' => 'INVERSION PUBLICA', 'DescripcionCapitulo' => 'INVERSION PUBLICA']);
        DB::table('catalogocapitulos')->insert(['Capitulo' => 8000,	'NombreCapitulo' => 'PARTICIPACIONES Y APORTACIONES', 'DescripcionCapitulo' => 'PARTICIPACIONES Y APORTACIONES']);
    }
}
