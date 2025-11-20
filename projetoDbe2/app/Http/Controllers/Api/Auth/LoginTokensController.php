<?php

namespace App\Http\Controllers\Api\Auth;

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
            if ($user->is_admin == true) {
                $ability = ['is-admin'];
            } else if ($user->is_vendedor == true) {
                $ability = ['is-vendedor'];
            } else {
                $ability = [];
            }
            $token = $user->createToken($request->email, $ability)->plainTextToken;
            return compact('token', 'user');
        } catch (Exception $error) {
            return $this->errorHandler($error->getMessage(), $error, 401);
        }
    }

    public function logout(Request $request): JsonResponse
    {
        $request->user()->tokens()->delete();
        return response()->json(['message' => 'Sessão encerrada, todos os tokens foram revogados']);
    }

    public function revogarusado(Request $request): JsonResponse
    {
        $request->user()->currentAccessToken()->delete();
        return response()->json(['message' => 'Logout feito com sucesso']);
    }
}
