<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class catalogotipocontrato_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('catalogotipocontrato')->insert(['IdTipoContrato' => 1, 'TipoContrato' => 'Marco']);
        DB::table('catalogotipocontrato')->insert(['IdTipoContrato' => 2, 'TipoContrato' => 'Consolidado']);
        DB::table('catalogotipocontrato')->insert(['IdTipoContrato' => 3, 'TipoContrato' => 'Noaplica']);
    }
}
