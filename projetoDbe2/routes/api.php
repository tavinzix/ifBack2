<?php

use App\Http\Controllers\Api\Auth\LoginStateFulController;
use App\Http\Controllers\Api\Auth\LoginTokensController;
use App\Http\Controllers\Api\ProdutoController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\VendedorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::apiResource('produtos', ProdutoController::class)->middleware('auth:sanctum');
Route::apiResource('produtos', ProdutoController::class)->only(['index', 'show']);

Route::apiResource('usuarios', UserController::class)->parameters(['usuarios' => 'usuario']);

Route::apiResource('vendedores', VendedorController::class)->parameters(["vendedores" => 'vendedor'])->middleware('auth:sanctum');

Route::middleware('web')->prefix('spa')->controller(LoginStateFulController::class)->group(function () {
    Route::post("/login", [LoginStateFulController::class, 'login']);
    Route::post("/logout", [LoginStateFulController::class, 'logout']);
});

Route::prefix('tokens')->controller(LoginTokensController::class)->group(function () {
    Route::post('logout', 'logout')->middleware("auth:sanctum");
    Route::post('revogarusado', 'revogarUtilizado')->middleware("auth:sanctum");
    Route::post('login', 'login');
});
