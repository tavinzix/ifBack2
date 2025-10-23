<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index()
    {
        $listProdutos = Produto::all();
        return view('produtos.index', ["listProdutos" => $listProdutos]);
    }

    public function show($id)
    {
        $produto = Produto::find($id);
        return view('produtos.dadosprod', ["produto" => $produto]);
    }

    public function create()
    {
        return view('produtos.produto_create');
    }

    public function store(Request $request)
    {
        $produto = new Produto;
        $produto->nome = $request->nome;
        $produto->descricao = $request->descricao;
        $produto->categoria_id = $request->categoria_id;
        $produto->marca = $request->marca;
        $produto->atributos = json_encode($request->atributos ?? []);
        $produto->peso = $request->peso;
        $produto->dimensoes = json_encode($request->dimensoes ?? []);

        if ($produto->save())
            return redirect(('/produtos'));
        else
            dd("Erro ao inserir novo produto!");
    }

    public function edit($id)
    {
        $data = ['produto' => Produto::find($id)];
        return view('produtos.produto_edit', $data);
    }

    public function update(Request $request, $id)
    {
        $updateProd = $request->all();
        $produto = Produto::find($id);

        $produto->nome = $updateProd['nome'];
        $produto->descricao = $updateProd['descricao'];
        $produto->marca = $updateProd['marca'];
        $produto->categoria_id = $updateProd['categoria_id'];
        $produto->peso = $updateProd['peso'];

        $produto->atributos = json_encode($updateProd['atributos']);
        $produto->dimensoes = json_encode($updateProd['dimensoes']);

        if (!$produto->save())
            dd("Erro ao atualizar produto $id");

        return redirect('/produtos');
    }

    public function delete($id){
        return view('produtos.remove', ['produto' => Produto::find($id)]);
    }

    public function remove(Request $request, $id){
        if ($request->has('confirmar')) {
            if (!Produto::destroy($id)) {
                dd("Erro ao deletar o produto $id!");
            }
        }
        return redirect('/produtos');
    }
}
