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
        Schema::create('catalogotipoproveedor', function (Blueprint $table) {
            $table->id('IdTipoProveedor')->comment('Identificador del tipo de proveedor');
            $table->string('TipoProveedor')->comment('Tipo de proveedor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catalogotipoproveedor');
    }
};
