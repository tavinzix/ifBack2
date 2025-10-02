<?php

use Illuminate\Support\Facades\Route;

use function Pest\Laravel\json;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ola', function () {
    return response()->json('teste');
});
