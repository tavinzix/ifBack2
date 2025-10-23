<?php

use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\VendedoresController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(ProdutosController::class)->group(function () {
    Route::get('/produtos', 'index');
    Route::get('/produtos/{id}', 'show');
    Route::get('/produto', 'create');
    Route::post('/produto', 'store');
    Route::get('/produtos/{id}/edit', 'edit')->name('edit');
    Route::post('/produtos/{id}/update', 'update')->name('update');
    Route::get('/produtos/{id}/delete',  'delete')->name('delete');
    Route::post('/produtos/{id}/delete', 'remove')->name('remove');
});


Route::controller(UsuariosController::class)->group(function () {
    Route::get('/usuarios', 'index');
    Route::get('/usuarios/{id}', 'show');

    Route::get('/usuario', 'create');
    Route::post('/usuario', 'store');
    Route::get('/usuarios/{id}/edit', 'edit')->name('editUser');;
    Route::post('/usuarios/{id}/update', 'update')->name('updateUser');
    Route::get('/usuarios/{id}/delete', 'delete')->name('deleteUser');
    Route::post('/usuarios/{id}/delete', 'remove')->name('removeUser');
});

Route::resource('usuarios', UsuariosController::class);

Route::controller(VendedoresController::class)->group(function () {
    Route::get('/vendedores', 'index');
    Route::get('/vendedores/{id}', 'show');

    Route::get('/vendedor', 'create');
    Route::post('/vendedor', 'store');
    Route::get('/vendedores/{id}/edit', 'edit')->name('editVendedor');;
    Route::post('/vendedores/{id}/update', 'update')->name('updateVendedor');
    Route::get('/vendedores/{id}/delete', 'delete')->name('deleteVendedor');
    Route::post('/vendedores/{id}/delete', 'remove')->name('removeVendedor');
});
