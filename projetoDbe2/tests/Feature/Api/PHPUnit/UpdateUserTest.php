<?php

namespace Tests\Feature\Api\PHPUnit;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;

class UpdateUserTest extends TestCase
{
    use RefreshDatabase;

    public function test_atualiza_usuario_com_sucesso()
    {
        $authUser = User::factory()->create();
        Sanctum::actingAs($authUser);

        $payload = [
            'nome_completo' => 'Usuário Atualizado',
            'email' => 'usuario_atualizado@teste.com',
            'password' => '123456',
            'telefone' => '51988887777',
        ];

        $response = $this->putJson("/api/usuarios/{$authUser->id}", $payload);

        $response->assertStatus(201)->assertSee('Usuario');
    }
}
