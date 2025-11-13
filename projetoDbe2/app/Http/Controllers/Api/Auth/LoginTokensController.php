<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Exception;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class LoginTokensController extends LoginController
{
    public function login(LoginRequest $request)
    {
        try {
            $user = $this->authenticate($request->validated());
            if (!$user) throw new Exception("Dados inválidos");
            $token = $user->createToken($user->email)->plainTextToken;
            return compact('token', 'user');
        } catch (Exception $error) {
            return $this->errorHandler($error->getMessage(), $error, 401);
        }
    }

    public function logout(Request $request): JsonResponse
    {
        $user = $this->authenticate($request->validated());
        if (!$user) return response()->json(["message" => "Não autenticado"], 401);
        $user->tokens()->delete();
        return response()->json(["message" => "Sessão encerrada"]);
    }

    public function revogarUtilizado(Request $request): JsonResponse
    {
        $user = $this->authenticate($request->validated());
        if (!$user) return response()->json(["message" => "Não autenticado"], 401);
        $user->currentAccessToken()->delete();
        return response()->json(["message" => "Sessão encerrada"]);
    }
}
