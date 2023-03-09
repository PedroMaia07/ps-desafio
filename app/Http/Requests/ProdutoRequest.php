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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nome' =>['required', 'min:3', 'max:150'],
            'descricao' => ['required', 'min:10', 'max:255'],
            'preco'=> ['required', 'min:2', 'max:10'],
            'quantidade' => ['required'],
            'imagem' => 'image',
        ];
    }

    public function mensages(){
        
        return [
            'name.requiered' => "esse campo é obrigatorio!",
            'name.max' => "Esse campo deve ter no maximo 100 carecteres",
            'descricao.requiered' => "esse campo é obrigatorio!",
            'descricao.max' => "Esse campo deve ter no maximo 255 carecteres",
            'quantidade.requiered'  => "esse campo é obrigatorio!",
    ];
    }
}