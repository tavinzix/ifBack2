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
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
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
    public function show(Request $request, User $usuario)
    {
        if ($request->user()->id == $usuario->id) {
            return new UserResource($usuario);
        } else if ($request->user()->is_admin) {
            return new UserResource($usuario);
        } else {
            return ("Acesso negado");
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UsuarioUpdateRequest $request, User $usuario)
    {
        try {
            if ($request->user()->id == $usuario->id) {
                $usuario->update($request->validated());
                return new UsuarioUpdatedResource($usuario);
            } else if ($request->user()->is_admin) {
                $usuario->update($request->validated());
                return new UsuarioUpdatedResource($usuario);
            } else {
                return ("Acesso negado");
            }
        } catch (Exception $error) {
            return $this->errorHandler("Erro ao atualizar usuario", $error, 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, User $usuario)
    {
        try {
            if ($request->user()->id == $usuario->id) {
                $usuario->delete();
                return (new UserResource($usuario))->additional(["message" => "Usuario removido!!!"]);
            } else if ($request->user()->is_admin) {
                $usuario->delete();
                return (new UserResource($usuario))->additional(["message" => "Usuario removido!!!"]);
            } else {
                return ("Acesso negado");
            }
        } catch (Exception $error) {
            return $this->errorHandler("Erro ao remover usuario!!", $error, 500);
        }
    }
}
