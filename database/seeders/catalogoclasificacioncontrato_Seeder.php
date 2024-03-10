<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class catalogoclasificacioncontrato_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('catalogoclasificacioncontrato')->insert(['IdClasificacionContrato' => 1, 'ClasificacionContrato' => 'Abierto']);
        DB::table('catalogoclasificacioncontrato')->insert(['IdClasificacionContrato' => 2, 'ClasificacionContrato' => 'Cerrado']);
    }
}
