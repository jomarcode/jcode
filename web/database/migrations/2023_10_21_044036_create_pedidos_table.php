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
            $table->string('producto'); // Relación con el producto seleccionado
            $table->string('nombre_cliente', 255);
            $table->string('apellidos_cliente', 255);
            $table->string('dni', 20);
            $table->string('celular', 20);
            $table->string('ciudad', 100);
            $table->string('direccion_entrega', 500);
            $table->string('referencia', 255);
            $table->integer('cantidad_producto'); // Cantidad del producto
            $table->decimal('precio_unitario', 10, 2); // Precio unitario del producto
            $table->decimal('subtotal', 10, 2);
            $table->decimal('total', 10, 2);
            $table->timestamps();
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
