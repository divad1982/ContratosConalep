<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Perfil_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('catalogoperfil')->insert(['IdPerfil' => 1, 'DescripcionPerfil' => 'Administrador de sistema']);
    }
}
