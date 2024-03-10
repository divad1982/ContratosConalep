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
        Schema::create('catalogobancos', function (Blueprint $table) {
            $table->id('IdBanco')->comment('Identificador del Banco');
            $table->string('BancoCorto')->comment('Nombre corto del Banco');
            $table->text('Banco')->comment('Nombre del Banco');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catalogobancos');
    }
};
