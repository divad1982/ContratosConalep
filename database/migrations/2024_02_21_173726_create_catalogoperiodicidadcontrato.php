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
        Schema::create('catalogoperiodocontrato', function (Blueprint $table) {
            $table->id('IdPeriodoContrato')->comment('Identificador del catalogo de periodicidad del contrato');
            $table->string('PeriodoContrato')->comment('Nombre del periodo para seguimiento del contrato');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catalogoperiodicidadcontrato');
    }
};
