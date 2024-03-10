<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class catalogoperiodicidadcontrato_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('catalogoperiodocontrato')->insert(['IdPeriodoContrato' => 1, 'PeriodoContrato' => 'Quincenal']);
        DB::table('catalogoperiodocontrato')->insert(['IdPeriodoContrato' => 1, 'PeriodoContrato' => 'Mensual']);
        DB::table('catalogoperiodocontrato')->insert(['IdPeriodoContrato' => 1, 'PeriodoContrato' => 'Bimestral']);
        DB::table('catalogoperiodocontrato')->insert(['IdPeriodoContrato' => 1, 'PeriodoContrato' => 'Trimestral']);
        DB::table('catalogoperiodocontrato')->insert(['IdPeriodoContrato' => 1, 'PeriodoContrato' => 'Cuatrimestral']);
        DB::table('catalogoperiodocontrato')->insert(['IdPeriodoContrato' => 1, 'PeriodoContrato' => 'Semestraal']);
        DB::table('catalogoperiodocontrato')->insert(['IdPeriodoContrato' => 1, 'PeriodoContrato' => 'Anual']);
    }
}
