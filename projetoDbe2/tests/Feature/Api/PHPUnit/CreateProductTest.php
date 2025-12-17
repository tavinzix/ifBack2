<?php

namespace Tests\Feature\Api\PHPUnit;

use App\Models\User;
use App\Models\Vendedor;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;

class CreateProductTest extends TestCase
{
    use RefreshDatabase;

    public function test_cria_produto_com_sucesso()
    {
        $user = User::factory()->create();

        Sanctum::actingAs($user, ['is-vendedor']);

        $vendedor = Vendedor::create([
            'user_id' => $user->id,
            'nome_loja' => 'Loja Teste',
            'cnpj' => '12345678000199',
            'descricao_loja' => 'Descrição teste',
            'email' => 'loja@teste.com',
            'telefone' => '51999999999',
            'categoria' => 'Teste',
            'cep' => '90000-000',
            'estado' => 'RS',
            'cidade' => 'Porto Alegre',
            'bairro' => 'Centro',
            'rua' => 'Rua Teste',
            'numero' => '123',
        ]);

        $payload = [
            'vendedor_id' => $vendedor->id,
            'nome' => 'Produto Teste',
            'descricao' => 'Descrição Teste',
            'categoria_id' => 1,
            'marca' => 'Marca X',
            'atributos' => [],
            'peso' => 1,
            'preco' => 10,
            'estoque' => 5,
            'dimensoes' => [],
        ];

        $response = $this->postJson('/api/produtos', $payload);
        $response->assertStatus(201)->assertSee('Produto criado');
    }
}