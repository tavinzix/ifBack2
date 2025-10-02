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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nome_completo');
            $table->string('email')->unique();
            $table->string('cpf')->unique();
            $table->string('senha');
            $table->string('telefone');
            $table->date('dt_nasc');
            $table->timestamp('data_criacao')->useCurrent();
            $table->enum('status', ['1', '2', '3'])->default('1')->comment('1 = ativo, 2 = inativo, 3 = banido');
            $table->string('img_user', 250)->default('avatar.jpg');
            $table->timestamp('data_atualizacao')->useCurrent()->useCurrentOnUpdate();

            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
