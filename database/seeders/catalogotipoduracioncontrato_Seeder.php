<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class catalogotipoduracioncontrato_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('catalogotipoduracioncontrato')->insert(['IdTipoDuracionContrato' => 1, 'TipoDuracionContrato' => 'Anual']);
        DB::table('catalogotipoduracioncontrato')->insert(['IdTipoDuracionContrato' => 2, 'TipoDuracionContrato' => 'Plurianual']);
    }
}
