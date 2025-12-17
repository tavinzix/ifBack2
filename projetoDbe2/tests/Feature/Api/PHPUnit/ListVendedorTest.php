<?php

namespace Tests\Feature\Api\PHPUnit;

use Tests\TestCase;
use App\Models\User;
use Laravel\Sanctum\Sanctum;

class ListVendedorTest extends TestCase
{

    public function test_listar_todos_os_vendedores(): void
    {
        $authUser = User::factory()->create();
        Sanctum::actingAs($authUser, ['is-vendedor']);

        $response = $this->getJson('/api/vendedores');
        $response->assertStatus(200);
    }
}
