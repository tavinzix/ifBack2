<?php

namespace Tests\Feature\Api\PHPUnit;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;

class CreateVendedorTest extends TestCase
{
    use RefreshDatabase;

    public function test_cria_vendedor_com_sucesso()
    {
        $user = User::factory()->create();
        Sanctum::actingAs($user, ['is-admin']);

        $payload = [
            'user_id' => $user->id,
            'nome_loja' => 'Loja Teste',
            'cnpj' => '12345678901234',
            'descricao_loja' => 'Descrição',
            'email' => 'loja@teste.com',
            'telefone' => '51999999999',
            'categoria' => 'Teste',
            'cep' => '90000000',
            'estado' => 'RS',
            'cidade' => 'Porto Alegre',
            'bairro' => 'Centro',
            'rua' => 'Rua Teste',
            'numero' => '123',
        ];

        $response = $this->postJson('/api/vendedores', $payload);

        $response->assertStatus(201)->assertSee('Vendedor');
    }
}