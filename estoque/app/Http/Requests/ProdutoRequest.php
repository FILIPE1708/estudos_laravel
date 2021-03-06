<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => 'required|min:3',
            'valor' => 'required|numeric',
            'descricao' => 'required|max:250',
            'quantidade' => 'required|numeric',
            'tamanho' => 'required|max:100'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'O :attribute é obrigatório !!'
        ];
    }
}
