<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('catalogomunicipios', function (Blueprint $table) {
            $table->id('IdMunicipio')->comment('Identificador del municipio');
            $table->string('Municipio')->comment('Nombre del Municipio');
            $table->integer('IdEstado')->comment('Identificador del estado al que pertenece el municipio');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catalogomunicipios');
    }
};
