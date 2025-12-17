<?php

namespace Tests\Feature\Api\PHPUnit;

use App\Models\User;
use Tests\TestCase;
use Laravel\Sanctum\Sanctum;

class ListUserTest extends TestCase
{

    public function test_listar_todos_os_usuarios(): void
    {
        $user = User::factory()->create();
        Sanctum::actingAs($user);

        $response = $this->get('/api/usuarios');

        $response->assertStatus(200);
    }
}
