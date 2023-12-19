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
     */
    public function run(): void
    {
        $usu = User::create([
            'name' => 'David de Llano García',
            'email' => 'dllano@conalep.edu.mx',
            'password' => bcrypt('Conalep123'),
        ]);
        
    }
}
