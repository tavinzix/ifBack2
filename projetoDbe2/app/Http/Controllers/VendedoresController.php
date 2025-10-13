<?php

namespace App\Http\Controllers;

use App\Models\Vendedores;
use Illuminate\Http\Request;

class VendedoresController extends Controller
{
    public function index()
    {
        $listVendedores = Vendedores::all();
        return view('vendedores.index', ["listVendedores" => $listVendedores]);
    }

    public function show($id)
    {
        $vendedores = Vendedores::find($id);
        return view('vendedores.dadosvendedor', ["vendedores" => $vendedores]);
    }

    public function create()
    {
        return view('vendedores.vendedor_create');
    }

    public function store(Request $request)
    {
        $vendedor = new Vendedores;
        $vendedor->user_id = $request->user_id;
        $vendedor->nome_loja = $request->nome_loja;
        $vendedor->cnpj = $request->cnpj;
        $vendedor->descricao_loja = $request->descricao_loja;
        $vendedor->email = $request->email;
        $vendedor->telefone = $request->telefone;
        $vendedor->categoria = $request->categoria;
        $vendedor->cep = $request->cep;
        $vendedor->estado = $request->estado;
        $vendedor->cidade = $request->cidade;
        $vendedor->bairro = $request->bairro;
        $vendedor->rua = $request->rua;
        $vendedor->numero = $request->numero;
        $vendedor->img_vendedor = "imgPadrao.jpg";

        if ($vendedor->save())
            return redirect(('/vendedores'));
        else
            dd("Erro ao inserir novo vendedor!");
    }

    public function edit($id)
    {
        $data = ['vendedor' => Vendedores::find($id)];
        return view('vendedores.vendedor_edit', $data);
    }

    public function update(Request $request, $id)
    {
        $updateVendedor = $request->all();
        $vendedor = Vendedores::find($id);

        $vendedor->nome_loja = $updateVendedor['nome_loja'];
        $vendedor->descricao_loja = $updateVendedor['descricao_loja'];
        $vendedor->telefone = $updateVendedor['telefone'];
        $vendedor->cep = $updateVendedor['cep'];
        $vendedor->estado = $updateVendedor['estado'];
        $vendedor->cidade = $updateVendedor['cidade'];
        $vendedor->bairro = $updateVendedor['bairro'];
        $vendedor->rua = $updateVendedor['rua'];
        $vendedor->numero = $updateVendedor['numero'];

        if (!$vendedor->save())
            dd("Erro ao atualizar vendedor $id");

        return redirect('/vendedores');
    }

    public function delete($id)
    {
        return view('vendedores.vendedor_remove', ['vendedor' => Vendedores::find($id)]);
    }

    public function remove(Request $request, $id)
    {
        if ($request->has('confirmar')) {
            if (!Vendedores::destroy($id)) {
                dd("Erro ao deletar o vendedr $id!");
            }
        }
        return redirect('/vendedores');
    }

}
