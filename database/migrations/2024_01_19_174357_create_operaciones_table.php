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
        Schema::create('catalogooperaciones', function (Blueprint $table) {
            $table->id('IdOperacion')->comment('Identificador la relación');
            $table->string('Operacion')->comment('Operación a ejecutar en el sistema');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catalogooperaciones');
    }
};
