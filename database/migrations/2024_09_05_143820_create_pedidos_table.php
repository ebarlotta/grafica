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
            $table->unsignedBigInteger('tipodocumento');
            $table->double('cantidadhojas');
            $table->boolean('frentedorso');
            $table->double('cantidadejemplares');
            $table->string('archivo');
            // $table->string('fechacreacion');
            $table->timestamps();

            $table->foreign('tipodocumento')->references('id')->on('tipodocumentos');
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
