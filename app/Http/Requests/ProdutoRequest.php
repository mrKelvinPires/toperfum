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
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome_perfume' => 'required',
            'agua' => 'required',
            'alcool' => 'required',
            'fragrancia_ml' => 'required',
            'nome_fragrancia' => 'required'
        ];
    }
}
