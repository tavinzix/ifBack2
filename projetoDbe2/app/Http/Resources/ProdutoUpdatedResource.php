<?php

namespace App\Http\Resources;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProdutoUpdatedResource extends ProdutoResource
{

    public function withResponse(Request $request, JsonResponse $response): void
    {
        $response->setStatusCode(201, 'Produto Atualizado!');
    }

    public function with(Request $request): array
    {
        return [
            'message' => 'Produto atualizado com sucesso!!',
        ];
    }
}
