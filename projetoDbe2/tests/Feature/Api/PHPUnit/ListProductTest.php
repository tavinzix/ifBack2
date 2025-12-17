<?php

namespace Tests\Feature\Api\PHPUnit;

use Tests\TestCase;

class ListProductTest extends TestCase
{

    public function test_listar_todos_os_produtos(): void
    {
        $URL = '/api/produtos';
        $response = $this->get($URL);
        $response->assertStatus(200);
    }
}
