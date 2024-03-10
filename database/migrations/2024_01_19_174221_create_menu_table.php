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
        Schema::create('catalogomenu', function (Blueprint $table) {
            $table->id('IdMenu')->comment('Identificador la relación');
            $table->integer('IdTipo')->nullable()->comment('Relación con el tipo de menú que se generara');
            $table->integer('IdOperacion')->nullable()->comment('Relación con la operación que se ocupa del sistema');
            $table->integer('Dependencia')->nullable()->comment('De que menú depende id_menu');
            $table->string('TextoOpcion')->comment('Texto para mostrar en nuestra opción');
            $table->text('Icono')->nullable()->comment('Texto web del SVG');
            $table->string('Ubicacion')->comment('Ubicacion del menú ya sea derecha[D] o izquierda[I]');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catalogomenu');
    }
};
