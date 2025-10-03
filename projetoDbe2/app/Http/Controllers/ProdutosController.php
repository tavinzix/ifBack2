<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index()
    {
        $listProdutos = Produtos::all();
        return view('produtos.index', ["listProdutos" => $listProdutos]);
    }

    public function show($id)
    {
        $produto = Produtos::find($id);
        return view('produtos.dadosprod', ["produto" => $produto]);
    }
}
