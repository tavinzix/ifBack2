<?php

namespace Tests\Feature\Api\PHPUnit;

use App\Models\User;
use App\Models\Vendedor;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;

class DeleteVendedorTest extends TestCase
{
    use RefreshDatabase;

    public function test_remove_vendedor_com_sucesso()
    {
        $user = User::factory()->create();
        Sanctum::actingAs($user);

        $vendedor = Vendedor::create([
            'user_id' => $user->id,
            'nome_loja' => 'Loja Teste',
            'cnpj' => '12345678901234',
            'descricao_loja' => 'Desc',
            'email' => 'teste@teste.com',
            'telefone' => '51999999999',
            'categoria' => 'Teste',
            'cep' => '90000000',
            'estado' => 'RS',
            'cidade' => 'Porto Alegre',
            'bairro' => 'Centro',
            'rua' => 'Rua X',
            'numero' => '10',
        ]);

        $response = $this->deleteJson("/api/vendedores/{$vendedor->id}");

        $response->assertStatus(200);
    }
}