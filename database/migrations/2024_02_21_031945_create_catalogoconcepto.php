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
        Schema::create('catalogoconcepto', function (Blueprint $table) {
            $table->id('Concepto')->comment('Identificador del concepto del capitulo');
            $table->integer('Capitulo')->comment('Capitulo del clasificador por objeto del gasto');
            $table->text('NombreConcepto')->comment('Nombre del concepto del clasificador por objeto del gasto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catalogoconcepto');
    }
};
