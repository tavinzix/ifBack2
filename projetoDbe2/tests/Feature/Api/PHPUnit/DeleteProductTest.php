<?php

namespace Tests\Feature\Api\PHPUnit;

use App\Models\Produto;
use App\Models\Vendedor;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;

class DeleteProductTest extends TestCase
{
    use RefreshDatabase;

    public function test_remove_produto_com_sucesso()
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

        $produto = Produto::create([
            'vendedor_id' => $vendedor->id,
            'nome' => 'Produto Teste',
            'descricao' => 'Descrição Teste',
            'categoria_id' => 1,
            'marca' => 'Marca Teste',
            'atributos' => [],
            'peso' => 1,
            'preco' => 10,
            'estoque' => 5,
            'dimensoes' => [],
        ]);

        $response = $this->delete("/api/produtos/{$produto->id}");
        $response->assertStatus(200)->assertSee('removido');
    }
}