<?php

namespace Tests\Feature\Api\PHPUnit;

use App\Models\User;
use App\Models\Vendedor;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;

class UpdateVendedorTest extends TestCase
{
    use RefreshDatabase;

    public function test_atualiza_vendedor_com_sucesso()
    {
        $user = User::factory()->create();
        Sanctum::actingAs($user);

        $vendedor = Vendedor::create([
            'user_id' => $user->id,
            'nome_loja' => 'Loja Antiga',
            'cnpj' => '12345678901234',
            'descricao_loja' => 'Desc',
            'email' => 'antiga@teste.com',
            'telefone' => '51999999999',
            'categoria' => 'Teste',
            'cep' => '90000000',
            'estado' => 'RS',
            'cidade' => 'Porto Alegre',
            'bairro' => 'Centro',
            'rua' => 'Rua A',
            'numero' => '1',
        ]);

        $payload = [
            'user_id' => $user->id,
            'nome_loja' => 'Loja Atualizada',
            'cnpj' => '12345678901234',
            'descricao_loja' => 'Nova descrição',
            'email' => 'nova@teste.com',
            'telefone' => '51988887777',
            'categoria' => 'Teste',
            'cep' => '90000000',
            'estado' => 'RS',
            'cidade' => 'Porto Alegre',
            'bairro' => 'Centro',
            'rua' => 'Rua Nova',
            'numero' => '99',
        ];

        $response = $this->putJson("/api/vendedores/{$vendedor->id}", $payload);

        $response->assertStatus(201)->assertSee('Vendedor');
    }
}
