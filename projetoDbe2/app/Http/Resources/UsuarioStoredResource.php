<?php

namespace App\Http\Resources;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UsuarioStoredResource extends UserResource
{
    public function withResponse(Request $request, JsonResponse $response): void
    {
        $response->setStatusCode(201, 'Usuario Criado!');
    }

    public function with(Request $request): array
    {
        return [
            'message' => 'Usuario criado com sucesso!!',
        ];
    }
}
