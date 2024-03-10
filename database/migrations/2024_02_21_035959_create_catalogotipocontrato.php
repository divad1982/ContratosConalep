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
        Schema::create('catalogotipocontrato', function (Blueprint $table) {
            $table->id('IdTipoContrato')->comment('Identificador del tipo de contrato');
            $table->string('TipoContrato')->comment('Tipo de Contrato');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catalogotipocontrato');
    }
};
