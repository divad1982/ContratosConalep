<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UsuarioInicial_Seeder::class);
        $this->call(Menu_Seeder::class);
        $this->call(Tipos_Seeder::class);
        $this->call(Perfil_Seeder::class);
        $this->call(Permisos_Seeder::class);
        $this->call(Operaciones_Seeder::class);
        $this->call(catalogotipoproveedor_Seeder::class);
        $this->call(catalogotiposprocedimiento_Seeder::class);
        $this->call(catalogotipoduracioncontrato_Seeder::class);
        $this->call(catalogocapitulo_Seeder::class);
        $this->call(catalogoconcepto_Seeder::class);
        $this->call(catalogopartidas_Seeder::class);
        $this->call(catalogotipocontrato_Seeder::class);
        $this->call(catalogoclasificacioncontrato_Seeder::class);
        $this->call(catalogoestados_Seeder::class);
        $this->call(catalogobancos_Seeder::class);
        $this->call(catalogomunicipios_Seeder::class);
        $this->call(catalogotiposidentificacion_Seeder::class);
        $this->call(catalogotiposmoneda_Seeder::class);
    }
}
