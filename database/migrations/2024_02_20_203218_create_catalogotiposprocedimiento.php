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
        Schema::create('catalogotiposprocedimiento', function (Blueprint $table) {
            $table->id('IdTipoProcedimiento')->comment('Identificador del tipo de procedimiento');
            $table->string('TipoProcedimiento')->comment('Tipo de procedimiento');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catalogotiposprocedimiento');
    }
};
