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
        Schema::create('proveedores', function (Blueprint $table) {
            $table->id('IdProveedor')->comment('Identificador del provedor');
            $table->string('NombreProveedorEmpresa')->comment('Nombre del proveedor');
            $table->string('APProveedor')->comment('Apellido Paterno del proveedor');
            $table->string('AMProveedor')->comment('Apellido Materno del proveedor');
            $table->string('Rfc')->comment('Rfc del proveedor');
            $table->text('DomicilioCalle')->nullable()->comment('Calle del domicilio del proveedor');
            $table->text('DomicilioNumeroExterior')->nullable()->comment('Numero exterior del domicilio del proveedor');
            $table->text('DomicilioNumeroInterior')->nullable()->comment('Numero interior del domicilio del proveedor');
            $table->integer('IdColonia')->nullable()->comment('Identificador de la colonia del domicilio del proveedor');
            $table->integer('IdLocalidadDelegacion')->nullable()->comment('Identificador de la localidad y/o delegación del domicilio del proveedor');
            $table->integer('IdMunicipio')->nullable()->comment('Identificador delmunicipio del domicilio del proveedor');
            $table->integer('IdEstado')->comment('Identificador del estado donde se ubica el proveedor');
            $table->integer('CodigoPostal')->comment('Código postal del domicilio del proveedor');
            $table->string('Telefono')->comment('Teléfono del proveedor');
            $table->text('Correo')->comment('Correo electronico del proveedor');
            $table->integer('IdTipoProveedor')->comment('Identificador del tipo de proveedor');
            $table->string('RfcRepresentanteLegal')->nullable()->comment('R.F.C. del representante legal');
            $table->text('NombreRepresentanteLegal')->nullable()->comment('Nombre del representante legal de la empresa');
            $table->text('APRepresentanteLegal')->nullable()->comment('Apellido Paterno del representante legal de la empresa');
            $table->text('AMRepresentanteLegal')->nullable()->comment('Apellido Materno del representante legal de la empresa');
            $table->integer('IdTipoIdentificacion')->comment('Identificador del tipo de identificación del representante legal');
            $table->binary('ActaConstitutiva')->nullable()->comment('Imágen del Acta constitutiva');
            $table->binary('PoderNotarial')->nullable()->comment('Imágen del Poder Notarial');
            $table->binary('RFC/Cedula')->nullable()->comment('Imágen de R.F.C.');
            $table->binary('ComprobanteDomicilio')->nullable()->comment('Imágen deL comprobante de domicilio');
            $table->binary('Identificacion')->nullable()->comment('Imágen de la identificación del representante legal');
            $table->string('NumeroCuenta')->comment('Número de cuenta del proveedor');
            $table->string('ClabeInterbancaria')->comment('Clabe interbancaria del proveedor');
            $table->string('NumeroSucursal')->nullable()->comment('Número de sucursal de la cuenta del proveedor');
            $table->string('NumeroPlaza')->nullable()->comment('Número de plaza de la cuenta del proveedor');
            $table->string('NombreCuenta')->comment('Nombre como aparece en la cuenta del proveedor');
            $table->string('FechaApertura')->nullable()->comment('Fecha de apertura de la cuenta del proveedor');
            $table->integer('IdTipoMoneda')->comment('Identificador del tipo de moneda que maneja la cuenta del proveedor');
            $table->string('IdBanco')->comment('Identificador de la institucion bancaria de la cuenta del proveedor');
            $table->string('FechaCancelacion')->nullable()->comment('Fecha de cancelación');
            $table->binary('EstadoCuenta')->nullable()->comment('Imágen del estado de cuenta del proveedor');
            $table->string('IdUsuario')->comment('Identificador del usuario wue realiza el registro');
            $table->text('IdMedioFormalizacion')->comment('Identificador del medio para formalizar el registro');
            $table->text('FirmaElectronica')->nullable()->comment('Firma electronica del alta de proovedor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proveedores');
    }
};
