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
            $table->unsignedBigInteger('cliente_id');
            
            $table->string('archivo');
            
            $table->double('cantidadhojas');
            $table->string('tipodeimpresion');
            $table->string('tipodepapel');      // tipos de papel tabla
            $table->boolean('frentedorso');     // 0ambas caras | 1 simple faz
            $table->double('cantidadejemplares');

            $table->string('metododeenvio');  // 1 Paso a buscarlo | 2 Enviar x delivery | 3 Enviar a direccion | 4 Otro
            $table->string('lugardeentrega')->default('Local'); // tablas

            $table->double('costoaproximado');

            $table->string('tipodocumento'); // tablas

            $table->timestamps();

            $table->foreign('tipodocumento')->references('id')->on('tipodocumentos');
            $table->foreign('cliente_id')->references('id')->on('clientes');
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
