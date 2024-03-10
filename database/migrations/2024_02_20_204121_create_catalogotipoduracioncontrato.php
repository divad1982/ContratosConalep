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
        Schema::create('catalogotipoduracioncontrato', function (Blueprint $table) {
            $table->id('IdTipoDuracionContrato')->comment('Identificador del tipo de duración del contrato');
            $table->string('TipoDuracionContrato')->comment('Nombre del tipo de duración del contrato');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catalogotipoduracioncontrato');
    }
};
