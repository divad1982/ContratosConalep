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
        Schema::create('catalogodelegaciones', function (Blueprint $table) {
            $table->id('IdDelegacion')->comment('Identificador de la delegación / localidad');
            $table->string('Delegacion')->comment('Nombre de la delegación');
            $table->integer('IdMunicipio')->comment('Identificador del municipio al que pertenece la delegacion / localidad');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catalogodelegaciones');
    }
};
