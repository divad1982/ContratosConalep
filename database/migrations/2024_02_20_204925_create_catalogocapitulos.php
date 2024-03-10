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
        Schema::create('catalogocapitulos', function (Blueprint $table) {
            $table->id('Capitulo')->comment('Capitulo del clasificador por objeto del gasto');
            $table->text('NombreCapitulo')->comment('Nombre del capítulo del clasificador por objeto del gasto');
            $table->text('DescripcionCapitulo')->comment('Descripcion del capítulo del clasificador por objeto del gasto')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catalogocapitulos');
    }
};
