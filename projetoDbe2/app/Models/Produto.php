<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produto extends Model
{
    use HasFactory;
    protected $fillable = [
        'vendedor_id',
        'nome',
        'descricao',
        'categoria_id',
        'marca',
        'atributos',
        'peso',
        'dimensoes',
        'preco',
        'estoque',
    ];

    protected $casts = [
        'atributos' => 'array',
        'dimensoes' => 'array',
    ];

    public function vendedor()
    {
        return $this->belongsTo(Vendedor::class);
    }
}
