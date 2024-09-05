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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->string('cliente');
            $table->string('nombre');
            $table->string('email');
            $table->string('telefono');
            $table->string('direccion');
            $table->string('geoposicion');
            $table->unsignedBigInteger('tipo_documento');
            $table->double('cantidad_hojas');
            $table->boolean('frente_dorso');
            $table->double('cantidad_ejemplares');
            $table->string('archivo');
            // $table->string('fecha_creacion');
            $table->timestamps();

            $table->foreign('tipo_documento')->on('id')->references('tipodocumentos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
