<?php

use App\Http\Controllers\Api\ProdutoController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\VendedorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::apiResource('produtos', ProdutoController::class);

Route::apiResource('usuarios', UserController::class)->parameters(['usuarios' => 'usuario']);

Route::apiResource('vendedores', VendedorController::class)->parameters(["vendedores" => 'vendedor']);