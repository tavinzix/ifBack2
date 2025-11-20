<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Api\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function authenticate(array $credentials): User | null{
        if(Auth::attempt($credentials))
            return User::where('email', $credentials['email'])->first();
        return null;
    }

    public function login(LoginRequest $request){
        try{
            $user = User::where('email', $request->email)->first();
            if(!$user || !Hash::check($request->password, $user->password))
                throw new \Exception('Falha na autenticação!');
            $ability = $user->is_admin?['is-admin']:[];
            $token = $user->createToken($request->email, $ability)->plainTextToken;
            return response()->json(['token'=>$token]);
        }catch(\Exception $error){

        }
    }
}