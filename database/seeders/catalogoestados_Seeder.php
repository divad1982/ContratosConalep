<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class catalogoestados_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('catalogoestados')->insert(['IdEstado' => 1, 'Estado' => 'Aguascalientes']);
        DB::table('catalogoestados')->insert(['IdEstado' => 2, 'Estado' => 'Baja California']);
        DB::table('catalogoestados')->insert(['IdEstado' => 3, 'Estado' => 'Baja California Sur']);
        DB::table('catalogoestados')->insert(['IdEstado' => 4, 'Estado' => 'Campeche']);
        DB::table('catalogoestados')->insert(['IdEstado' => 5, 'Estado' => 'Coahuila de Zaragoza']);
        DB::table('catalogoestados')->insert(['IdEstado' => 6, 'Estado' => 'Colima']);
        DB::table('catalogoestados')->insert(['IdEstado' => 7, 'Estado' => 'Chiapas']);
        DB::table('catalogoestados')->insert(['IdEstado' => 8, 'Estado' => 'Chihuahua']);
        DB::table('catalogoestados')->insert(['IdEstado' => 9, 'Estado' => 'Ciudad de México']);
        DB::table('catalogoestados')->insert(['IdEstado' => 10, 'Estado' => 'Durango']);
        DB::table('catalogoestados')->insert(['IdEstado' => 11, 'Estado' => 'Guanajuato']);
        DB::table('catalogoestados')->insert(['IdEstado' => 12, 'Estado' => 'Guerrero']);
        DB::table('catalogoestados')->insert(['IdEstado' => 13, 'Estado' => 'Hidalgo']);
        DB::table('catalogoestados')->insert(['IdEstado' => 14, 'Estado' => 'Jalisco']);
        DB::table('catalogoestados')->insert(['IdEstado' => 15, 'Estado' => 'México']);
        DB::table('catalogoestados')->insert(['IdEstado' => 16, 'Estado' => 'Michoacán de Ocampo']);
        DB::table('catalogoestados')->insert(['IdEstado' => 17, 'Estado' => 'Morelos']);
        DB::table('catalogoestados')->insert(['IdEstado' => 18, 'Estado' => 'Nayarit']);
        DB::table('catalogoestados')->insert(['IdEstado' => 19, 'Estado' => 'Nuevo León']);
        DB::table('catalogoestados')->insert(['IdEstado' => 20, 'Estado' => 'Oaxaca']);
        DB::table('catalogoestados')->insert(['IdEstado' => 21, 'Estado' => 'Puebla']);
        DB::table('catalogoestados')->insert(['IdEstado' => 22, 'Estado' => 'Querétaro']);
        DB::table('catalogoestados')->insert(['IdEstado' => 23, 'Estado' => 'Quintana Roo']);
        DB::table('catalogoestados')->insert(['IdEstado' => 24, 'Estado' => 'San Luis Potosí']);
        DB::table('catalogoestados')->insert(['IdEstado' => 25, 'Estado' => 'Sinaloa']);
        DB::table('catalogoestados')->insert(['IdEstado' => 26, 'Estado' => 'Sonora']);
        DB::table('catalogoestados')->insert(['IdEstado' => 27, 'Estado' => 'Tabasco']);
        DB::table('catalogoestados')->insert(['IdEstado' => 28, 'Estado' => 'Tamaulipas']);
        DB::table('catalogoestados')->insert(['IdEstado' => 29, 'Estado' => 'Tlaxcala']);
        DB::table('catalogoestados')->insert(['IdEstado' => 30, 'Estado' => 'Veracruz de Ignacio de la Llave']);
        DB::table('catalogoestados')->insert(['IdEstado' => 31, 'Estado' => 'Yucatán']);
        DB::table('catalogoestados')->insert(['IdEstado' => 32, 'Estado' => 'Zacatecas']);
    }
}
