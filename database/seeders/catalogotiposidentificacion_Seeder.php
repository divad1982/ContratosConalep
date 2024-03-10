<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class catalogotiposidentificacion_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('catalogotipoidentificacion')->insert(['IdTipoIdentificacion' => 1, 'TipoIdentificacion' => 'Credencial para votar vigente, expedida por el Instituto Nacional Electoral']);
        DB::table('catalogotipoidentificacion')->insert(['IdTipoIdentificacion' => 2, 'TipoIdentificacion' => 'Pasaporte vigente.']);
        DB::table('catalogotipoidentificacion')->insert(['IdTipoIdentificacion' => 3, 'TipoIdentificacion' => 'Cédula profesional vigente con fotografía. Quedan exceptuadas las cédulas profesionales electrónicas.']);
        DB::table('catalogotipoidentificacion')->insert(['IdTipoIdentificacion' => 4, 'TipoIdentificacion' => 'Credencial del Instituto Nacional de las Personas Adultas Mayores vigente.']);        
    }
}
