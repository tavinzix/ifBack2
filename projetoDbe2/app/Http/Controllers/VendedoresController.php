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
}
