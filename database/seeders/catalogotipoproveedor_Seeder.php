<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class catalogotipoproveedor_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('catalogotipoproveedor')->insert(['IdTipoProveedor' => 1, 'TipoProveedor' => 'Física']);
        DB::table('catalogotipoproveedor')->insert(['IdTipoProveedor' => 2, 'TipoProveedor' => 'Moral']);
    }
}
