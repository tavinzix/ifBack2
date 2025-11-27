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
        Schema::create('vendedores', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('nome_loja');
            $table->string('cnpj');
            $table->text('descricao_loja');
            $table->string('email');
            $table->string('telefone');
            $table->string('categoria');
            $table->string('cep', 9);
            $table->string('estado');
            $table->string('cidade', 32);
            $table->string('bairro');
            $table->string('rua');
            $table->string('numero');
            $table->decimal('avaliacao_media', 3, 2)->default(0.00);
            $table->enum('status', ['0', '1', '2', '3'])->default('0')->comment('0 = Pendente, 1 = aprovado, 2 = inativo, 3 = banido');
            $table->string('img_vendedor')->default('sem_imagem.jpg');
            
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendedores');
    }
};
