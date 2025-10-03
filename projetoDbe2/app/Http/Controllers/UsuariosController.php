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
}
