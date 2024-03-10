<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Tipos_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('catalogotipos')->insert(['IdTipo' => 1, 'DescripcionTipo' => 'BI']);
        DB::table('catalogotipos')->insert(['IdTipo' => 2, 'DescripcionTipo' => 'BF']);
        DB::table('catalogotipos')->insert(['IdTipo' => 3, 'DescripcionTipo' => 'BS']);
        DB::table('catalogotipos')->insert(['IdTipo' => 4, 'DescripcionTipo' => 'MP']);
        DB::table('catalogotipos')->insert(['IdTipo' => 5, 'DescripcionTipo' => 'MS']);
        DB::table('catalogotipos')->insert(['IdTipo' => 6, 'DescripcionTipo' => 'CP']);
        DB::table('catalogotipos')->insert(['IdTipo' => 7, 'DescripcionTipo' => 'CS']);
    }
}
