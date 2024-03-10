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
        Schema::create('catalogotipomoneda', function (Blueprint $table) {
            $table->id('IdTipoMoneda')->comment('Identificador del tipo de moneda');
            $table->string('AbreviaturaTipoMoneda')->comment('Abreviatura del tipo de moneda');
            $table->text('TipoMoneda')->comment('Nombre del Tipo de moneda');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catalogotipomoneda');
    }
};
