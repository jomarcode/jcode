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
            $table->string('name',255);
            $table->string('slug');
            $table->string('descriptions',500);
            $table->string('extract');
            $table->decimal('price',5,2);
            $table->string('image');
            $table->boolean('visible');
            $table->unsignedBigInteger('categoria_id');
            $table->foreign('categoria_id')
                  ->references('id')
                  ->on('categorias');

            $table->timestamps();
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
