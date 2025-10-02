<?php

use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

use function Pest\Laravel\json;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ola', function () {
    return response()->json('teste');
});


Route::get('/produtos', [ProdutoController::class, 'index']);
Route::get('/produtos/{id}', [ProdutoController::class, 'show']);