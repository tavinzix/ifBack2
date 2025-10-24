<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\UsuarioStoreRequest;
use App\Http\Requests\UsuarioUpdateRequest;
use App\Http\Resources\UserCollection;
use App\Http\Resources\UserResource;
use App\Http\Resources\UsuarioStoredResource;
use App\Http\Resources\UsuarioUpdatedResource;
use App\Models\User;
use Exception;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new UserCollection(User::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UsuarioStoreRequest $request)
    {
        try {
            $usuario = User::create($request->validated());
            return new UsuarioStoredResource($usuario);
        } catch (Exception $error) {
            return $this->errorHandler("Erro ao criar novo usuário!!", $error, 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(User $usuario)
    {
        return new UserResource($usuario);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UsuarioUpdateRequest $request, User $usuario)
    {
        try {
            $usuario->update($request->validated());
            return new UsuarioUpdatedResource($usuario);
        } catch (Exception $error) {
            return $this->errorHandler("Erro ao atualizar usuario", $error, 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $usuario)
    {
        try {
            $usuario->delete();
            return (new UserResource($usuario))->additional(["message" => "Usuario removido!!!"]);
        } catch (Exception $error) {
            return $this->errorHandler("Erro ao remover usuario!!", $error, 500);
        }
    }
}
