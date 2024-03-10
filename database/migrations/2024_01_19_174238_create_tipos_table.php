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
        Schema::create('catalogotipos', function (Blueprint $table) {
            $table->id('IdTipo')->comment('Identificador la relación');
            $table->string('DescripcionTipo')->comment('Tipo de opción a generar [B]Botón [M]Menú [S]Submenu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catalogotipos');
    }
};
