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
        Schema::create('catalogocolonias', function (Blueprint $table) {
            $table->id('IdColonia')->comment('Identificador de la colónia');
            $table->string('Colonia')->comment('Nombre de la colónia');
            $table->integer('IdDelegacion')->comment('Identificador de la delegacion a la que pertenece la colónia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catalogocolonias');
    }
};
