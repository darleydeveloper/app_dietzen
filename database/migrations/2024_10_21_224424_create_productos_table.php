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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('referencia_del_producto')->nullable();//ingrese este nuevo atributo
            $table->text('imagen')->nullable();//aqui cambie el tipo de dato de text a string
            $table->string('descripción')->nullable();
            $table->string('genero')->nullable();
            $table->string('talla');
            $table->integer('precio');
            $table->string('tiempo_de_entrega')->nullable();
            $table->string('informacion_adicional')->nullable();
            $table->string('etiqueta1');
            $table->string('etiqueta2');
            $table->foreignId('categoria_id')->constrained()->on('categorias');
        });
    }

    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
