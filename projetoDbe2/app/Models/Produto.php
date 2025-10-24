<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    // Campos que podem ser atribuídos em massa
    protected $fillable = [
        'nome',
        'descricao',
        'categoria_id',
        'marca',
        'atributos',
        'peso',
        'dimensoes',
    ];

    // Indica que esses campos são JSON no banco
    protected $casts = [
        'atributos' => 'array',
        'dimensoes' => 'array',
    ];
}
