<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoriaRequest extends FormRequest
{
/**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'categoria' => ['required', 'min:3', 'max:100'],
        ];
    }
    public function messages(){
        return [
            'categoria.required' => "Esse acimpo é obrigatorio",
            'categoria.required' => "O campo deve ter no maximo 100 e no minino 3 caracteres",
        ];
    }
}
