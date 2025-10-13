<?php

use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\VendedoresController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/produtos', [ProdutosController::class, 'index']);
Route::get('/produtos/{id}', [ProdutosController::class, 'show']);

Route::get('/produto', [ProdutosController::class, 'create']);
Route::post('/produto', [ProdutosController::class, 'store']);
Route::get('/produtos/{id}/edit', [ProdutosController::class, 'edit'])->name('edit');
Route::post('/produtos/{id}/update', [ProdutosController::class, 'update'])->name('update');
Route::get('/produtos/{id}/delete', [ProdutosController::class, 'delete'])->name('delete');
Route::post('/produtos/{id}/delete', [ProdutosController::class, 'remove'])->name('remove');


Route::get('/usuarios', [UsuariosController::class, 'index']);
Route::get('/usuarios/{id}', [UsuariosController::class, 'show']);

Route::get('/usuario', [UsuariosController::class, 'create']);
Route::post('/usuario', [UsuariosController::class, 'store']);
Route::get('/usuarios/{id}/edit', [UsuariosController::class, 'edit'])->name('editUser');;
Route::post('/usuarios/{id}/update', [UsuariosController::class, 'update'])->name('updateUser');
Route::get('/usuarios/{id}/delete', [UsuariosController::class, 'delete'])->name('deleteUser');
Route::post('/usuarios/{id}/delete', [UsuariosController::class, 'remove'])->name('removeUser');


Route::get('/vendedores', [VendedoresController::class, 'index']);
Route::get('/vendedores/{id}', [VendedoresController::class, 'show']);

Route::get('/vendedor', [VendedoresController::class, 'create']);
Route::post('/vendedor', [VendedoresController::class, 'store']);
Route::get('/vendedores/{id}/edit', [VendedoresController::class, 'edit'])->name('editVendedor');;
Route::post('/vendedores/{id}/update', [VendedoresController::class, 'update'])->name('updateVendedor');
Route::get('/vendedores/{id}/delete', [VendedoresController::class, 'delete'])->name('deleteVendedor');
Route::post('/vendedores/{id}/delete', [VendedoresController::class, 'remove'])->name('removeVendedor');
