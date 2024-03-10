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
        Schema::create('catalogoclasificacioncontrato', function (Blueprint $table) {
            $table->id('IdClasificacionContrato')->comment('Identificador de la clasificación de contrato');
            $table->string('ClasificacionContrato')->comment('Clasificacion del contrato');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catalogoclasificacioncontrato');
    }
};
