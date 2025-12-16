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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vendedor_id')->constrained('vendedores')->cascadeOnDelete();
            $table->string('nome', 255);
            $table->text('descricao');
            $table->integer('categoria_id');
            $table->string('marca', 255);
            $table->json('atributos');
            $table->decimal('peso', 10, 2);
            $table->json('dimensoes')->nullable();
            $table->decimal('preco', 10, 2);
            $table->integer('estoque');
            $table->timestamps();

            $table->foreign('vendedor_id')->references('id')->on('vendedores')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
