<?php

namespace Tests\Feature\Api\PHPUnit;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;

class DeleteUserTest extends TestCase
{
    use RefreshDatabase;

    public function test_remove_usuario_com_sucesso()
    {
        $authUser = User::factory()->create();
        Sanctum::actingAs($authUser);

        $response = $this->deleteJson("/api/usuarios/{$authUser->id}");

        $response->assertStatus(200)->assertSee('Usuario');
    }
}
