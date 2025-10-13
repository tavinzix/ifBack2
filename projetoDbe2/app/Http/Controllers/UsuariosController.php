<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index()
    {
        $listUsers = User::all();
        return view('users.index', ["listUsers" => $listUsers]);
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('users.dadosuser', ["user" => $user]);
    }

    public function create()
    {
        return view('users.user_create');
    }

    public function store(Request $request){
        $user = new User;
        $user->nome_completo = $request->nome;
        $user->email = $request->email;
        $user->cpf = $request->cpf;
        $user->senha = $request->senha;
        $user->telefone = $request->telefone;
        $user->dt_nasc = $request->dt_nasc;
    
        if ($user->save())
            return redirect(('/usuarios'));
        else
            dd("Erro ao inserir novo usuario!");
    }

    public function edit($id) {
        $data = ['usuario' => User::find($id)];
        return view('users.user_edit', $data);
    }

    public function update(Request $request, $id)    {
        $updateUser = $request->all();
        $usuario = User::find($id);

        $usuario->nome_completo = $updateUser['nome'];
        $usuario->email = $updateUser['email'];
        $usuario->senha = $updateUser['senha'];
        $usuario->telefone = $updateUser['telefone'];
        // $usuario->img_user = $updateUser['img_user'];

        if (!$usuario->save())
            dd("Erro ao atualizar usuario $id");

        return redirect('/usuarios');
    }

    public function delete($id)
    {
        return view('users.user_remove', ['usuario' => User::find($id)]);
    }

    public function remove(Request $request, $id)
    {
        if ($request->has('confirmar')) {
            if (!User::destroy($id)) {
                dd("Erro ao deletar o usuario $id!");
            }
        }
        return redirect('/usuarios');
    }
}
