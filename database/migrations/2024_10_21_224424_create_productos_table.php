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
            $table->string('descripción')->nullable(); 
            $table->integer('precio');
            $table->integer('tiempo_de_entrega')->nullable();
            $table->string('informacion_adicional')->nullable();
            $table->string('etiqueta1');
            $table->string('etiqueta2');
            $table->foreignId('categoria_id')->constrained();
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
