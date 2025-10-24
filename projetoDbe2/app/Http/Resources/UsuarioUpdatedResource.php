<?php

namespace App\Http\Resources;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UsuarioUpdatedResource extends UserResource
{

    public function withResponse(Request $request, JsonResponse $response): void
    {
        $response->setStatusCode(201, 'Usuario Atualizado!');
    }

    public function with(Request $request): array
    {
        return [
            'message' => 'Usuario atualizado com sucesso!!',
        ];
    }
}
