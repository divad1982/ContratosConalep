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
        Schema::create('catalogotipoidentificacion', function (Blueprint $table) {
            $table->id('IdTipoIdentificacion')->comment('Identificador del tipo de identificación presentada');
            $table->string('TipoIdentificacion')->comment('Tipo de identificación presentada');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catalogotipoidentificacion');
    }
};
