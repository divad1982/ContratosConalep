<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class catalogoformalizacion_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('catalogoformalizacion')->insert(['IdMedioFormalizacion' => 1, 'MedioFormalizacion' => 'Físico']);
        DB::table('catalogoformalizacion')->insert(['IdMedioFormalizacion' => 1, 'MedioFormalizacion' => 'MFIJ']);
    }
}
