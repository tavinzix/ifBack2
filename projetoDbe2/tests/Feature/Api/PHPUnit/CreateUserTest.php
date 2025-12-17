<?php

namespace Tests\Feature\Api\PHPUnit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CreateUserTest extends TestCase
{
    use RefreshDatabase;

    public function test_cria_usuario_com_sucesso()
    {
        $payload = [
            'nome_completo' => 'Usuário Teste',
            'email' => 'usuario@teste.com',
            'cpf' => '12345678901',
            'password' => '123456',
            'telefone' => '51999999999',
            'dt_nasc' => '2000-01-01',
        ];

        $response = $this->postJson('/api/usuarios', $payload);
        $response->assertStatus(201)->assertSee('Usuario');
    }
}
