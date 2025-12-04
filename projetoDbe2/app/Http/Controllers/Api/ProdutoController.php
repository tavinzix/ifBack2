<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\ProdutoStoreRequest;
use App\Http\Requests\ProdutoUpdateRequest;
use App\Http\Resources\ProdutoCollection;
use App\Http\Resources\ProdutoResource;
use App\Http\Resources\ProdutoStoredResource;
use App\Http\Resources\ProdutoUpdatedResource;
use App\Models\Produto;
use App\Repositories\ProdutoRepository;
use Exception;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new ProdutoCollection(Produto::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProdutoStoreRequest $request)
    {
        try {
            $novoProduto = ProdutoRepository::store($request->validated());
            return new ProdutoStoredResource($novoProduto);
        } catch (Exception $error) {
            $this->errorHandler("Erro ao criar Produto!!", $error, 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Produto $produto)
    {
        return new ProdutoResource($produto);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProdutoUpdateRequest $request, Produto $produto)
    {
        try {
            $produto->update($request->validated());
            return new ProdutoUpdatedResource($produto);
        } catch (Exception $error) {
            return $this->errorHandler("Erro ao atualizar produto", $error, 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produto $produto)
    {
        try {
            $produto->delete();
            return (new ProdutoResource($produto))->additional(["message" => "Produto removido!!!"]);
        } catch (Exception $error) {
            return $this->errorHandler("Erro ao remover produto!!", $error, 500);
        }
    }
}
