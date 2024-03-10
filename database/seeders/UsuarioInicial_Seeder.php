<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuarioInicial_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(['id' => 1, 'name' => 'David de Llano García', 'email' => 'dllano@conalep.edu.mx', 'IdPerfil' => 1, 'password' => 'Conalep123']);
        DB::table('users')->insert(['id' => 2, 'name' => 'Eduardo Gómez Garduño', 'email' => 'egomez@conalep.edu.mx', 'IdPerfil' => 1, 'password' => 'Conalep123']);
    }
}
