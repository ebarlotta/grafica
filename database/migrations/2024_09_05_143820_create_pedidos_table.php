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
            $table->unsignedBigInteger('cliente_id')->default(0);
            $table->string('nombre');
            $table->string('telefono');
            $table->string('direccion');
            $table->string('dni');
            $table->string('cuit');
            $table->string('institucion');
            $table->string('email');
            $table->string('archivo');
            $table->double('cantidadhojas');
            $table->string('tipodeimpresion');
            $table->unsignedBigInteger('tipodocumento'); // tablas
            $table->string('tamanopapel');
            $table->string('tipodepapel');      // tipos de papel tabla
            $table->boolean('frentedorso');     // 0ambas caras | 1 simple faz
            $table->double('cantidadejemplares');

            $table->string('retiraenlocal')->default(1);  // 1 Paso a buscarlo | 2 Enviar x delivery | 3 Enviar a direccion | 4 Otro
            $table->string('lugardeentrega')->default('Local'); // tablas

            $table->string('geoposicion'); // tablas
            $table->string('observaciones'); // tablas

            $table->double('costoaprox');
            $table->unsignedBigInteger('estado_id');

            $table->timestamps();

            $table->foreign('tipodocumento')->references('id')->on('tipodocumentos');
            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->foreign('estado_id')->references('id')->on('estados');
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
