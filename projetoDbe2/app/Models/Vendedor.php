<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vendedor extends Model
{
    use HasFactory;
    protected $table = 'vendedores';

    protected $fillable = [
        'user_id',
        'nome_loja',
        'cnpj',
        'descricao_loja',
        'email',
        'telefone',
        'categoria',
        'cep',
        'estado',
        'cidade',
        'bairro',
        'rua',
        'numero',
        'img_vendedor',
    ];

    public function produtos()
    {
        return $this->hasMany(Produto::class);
    }

    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
