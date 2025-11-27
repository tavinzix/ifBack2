<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoStoreRequest extends FormRequest
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
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'vendedor_id' => 'required|integer',
            'nome' => 'required|string|max:100',
            'descricao' => 'required|string|max:500',
            'categoria_id' => 'nullable|integer',
            'marca' => 'nullable|string|max:50',
            'atributos' => 'nullable|array',
            'peso' => 'nullable|numeric|min:0',
            'preco' => 'nullable|numeric|min:0',
            'estoque' => 'nullable|integer',
            'dimensoes' => 'nullable|array',
        ];
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'atributos' => $this->input('atributos') ? (array) $this->input('atributos') : [],
            'dimensoes' => $this->input('dimensoes') ? (array) $this->input('dimensoes') : [],
        ]);
    }
}
