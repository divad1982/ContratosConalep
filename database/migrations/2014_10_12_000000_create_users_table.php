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
        Schema::create('users', function (Blueprint $table) {
            $table->id()->comment('Identificador único del usuario');
            $table->string('name')->comment('Nombre completo del usuario');
            $table->string('password')->nullable()->comment('Contraseña');
            $table->integer('IdPerfil')->nullable()->comment('Identificador del perfil de Usuario');
            $table->string('email')->comment('Correo electrónico del usuario');
            $table->string('service_id')->nullable();
            $table->string('grant_type')->nullable();
            $table->text('access_token')->nullable()->comment('Token de acceso generado por app externa');
            $table->text('refresh_token')->nullable();
            $table->string('token_expires_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
