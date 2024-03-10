<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class catalogotiposprocedimiento_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('catalogotiposprocedimiento')->insert(['IdTipoProcedimiento' => 1, 'TipoProcedimiento' => 'Adjudicación']);
        DB::table('catalogotiposprocedimiento')->insert(['IdTipoProcedimiento' => 2, 'TipoProcedimiento' => 'Invitación a cuando menos 3']);
        DB::table('catalogotiposprocedimiento')->insert(['IdTipoProcedimiento' => 3, 'TipoProcedimiento' => 'Licitación']);
    }
}
