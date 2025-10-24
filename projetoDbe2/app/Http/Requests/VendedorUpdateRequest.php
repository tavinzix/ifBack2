<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VendedorUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'user_id' => 'required|integer',
            'nome_loja' => 'required|string|max:255',
            'cnpj' => 'required|string|size:14',
            'descricao_loja' => 'nullable|string|max:1000',
            'email' => 'required|email|max:150',
            'telefone' => 'required|string|max:20',
            'categoria' => 'required|string|max:100',
            'cep' => 'required|string|size:8',
            'estado' => 'required|string|max:2',
            'cidade' => 'required|string|max:150',
            'bairro' => 'required|string|max:150',
            'rua' => 'required|string|max:150',
            'numero' => 'required|string|max:10',
            'img_vendedor' => 'nullable|string|max:255',
        ];
    }
}
