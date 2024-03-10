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
        Schema::create('catalogopatidas', function (Blueprint $table) {
            $table->id('Partida')->comment('Identificador de la partida');
            $table->integer('Concepto')->comment('Identificador del concepto del capitulo');
            $table->text('NombrePartida')->comment('Nombre de la partida del clasificador por objeto del gasto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catalogopatidas');
    }
};
