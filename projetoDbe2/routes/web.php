<?php

use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\VendedoresController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/produtos', [ProdutosController::class, 'index']);
Route::get('/produtos/{id}', [ProdutosController::class, 'show']);

Route::get('/vendedores', [VendedoresController::class, 'index']);
Route::get('/vendedores/{id}', [VendedoresController::class, 'show']);

Route::get('/usuarios', [UsuariosController::class, 'index']);
Route::get('/usuarios/{id}', [UsuariosController::class, 'show']);