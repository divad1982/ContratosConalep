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
        Schema::create('catalogopermisos', function (Blueprint $table) {
            $table->id('IdPermiso')->comment('Identificador la relación');
            $table->integer('IdMenu')->comment('Relación con el de menú que se autoriza');
            $table->integer('IdPerfil')->comment('Perfiles autorizados para ocupar la opción');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catalogopermisos');
    }
};
