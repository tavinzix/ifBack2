<?php

namespace App\Http\Resources;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class VendedorStoredResource extends VendedorResource
{
    public function withResponse(Request $request, JsonResponse $response): void
    {
        $response->setStatusCode(201, 'Vendedor Criado!');
    }

    public function with(Request $request): array
    {
        return [
            'message' => 'Vendedor criado com sucesso!!',
        ];
    }
}
