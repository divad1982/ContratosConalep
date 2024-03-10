<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Operaciones_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('catalogooperaciones')->insert(['IdOperacion' => 1, 'Operacion' => '/dashboard']);
        DB::table('catalogooperaciones')->insert(['IdOperacion' => 2, 'Operacion' => '/logout-keycloak']);
        DB::table('catalogooperaciones')->insert(['IdOperacion' => 3, 'Operacion' => '/estados']);
        DB::table('catalogooperaciones')->insert(['IdOperacion' => 4, 'Operacion' => '/tiposproveedor']);
        DB::table('catalogooperaciones')->insert(['IdOperacion' => 5, 'Operacion' => '/tiposproveedor/create']);
        DB::table('catalogooperaciones')->insert(['IdOperacion' => 6, 'Operacion' => '/proveedor']);
        DB::table('catalogooperaciones')->insert(['IdOperacion' => 7, 'Operacion' => '/proveedor/create']);
    }
}
