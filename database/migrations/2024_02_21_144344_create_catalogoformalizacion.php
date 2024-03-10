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
        Schema::create('catalogoformalizacion', function (Blueprint $table) {
            $table->id('IdMedioFormalizacion')->comment('Identificador del catalogo de medios de formalización');
            $table->string('MedioFormalizacion')->comment('Nombre del medio de formalización');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catalogoformalizacion');
    }
};
