<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\VendedorStoreRequest;
use App\Http\Requests\VendedorUpdateRequest;
use App\Http\Resources\VendedorCollection;
use App\Http\Resources\VendedorResource;
use App\Http\Resources\VendedorStoredResource;
use App\Http\Resources\VendedorUpdatedResource;
use App\Models\Vendedor;
use Exception;
use Illuminate\Http\Request;

class VendedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new VendedorCollection(Vendedor::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VendedorStoreRequest $request)
    {
        $statusHttp = 500;
        try {
            if(!$request->user()->tokenCan('is-admin')){
                $statusHttp = 403;
                throw new \Exception('Você não tem permissão - Necessario ser adm!');
            }
            $vendedor = Vendedor::create($request->validated());
            return new VendedorStoredResource($vendedor);
        } catch (Exception $error) {
            return $this->errorHandler("Erro ao criar novo vendedor!!", $error, 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Vendedor $vendedor)
    {
        return new VendedorResource($vendedor);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(VendedorUpdateRequest $request, Vendedor $vendedor)
    {
        try {
            $vendedor->update($request->validated());
            return new VendedorUpdatedResource($vendedor);
        } catch (Exception $error) {
            return $this->errorHandler("Erro ao atualizar vendedor", $error, 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vendedor $vendedor)
    {
        try {
            $vendedor->delete();
            return (new VendedorResource($vendedor))->additional(["message" => "Vendedor removido!!!"]);
        } catch (Exception $error) {
            return $this->errorHandler("Erro ao remover vendedor!!", $error, 500);
        }
    }
}
