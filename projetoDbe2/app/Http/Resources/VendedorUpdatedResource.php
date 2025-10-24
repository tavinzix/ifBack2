<?php

namespace App\Http\Resources;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class VendedorUpdatedResource extends VendedorResource
{
    public function withResponse(Request $request, JsonResponse $response): void
    {
        $response->setStatusCode(201, 'Vendedor Atualizado!');
    }

    public function with(Request $request): array
    {
        return [
            'message' => 'Vendedor atualizado com sucesso!!',
        ];
    }
}
