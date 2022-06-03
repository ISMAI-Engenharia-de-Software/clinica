<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DespesasTotaisRequest extends FormRequest
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
            'data_inicio'=>'required|date|before:data_final',
            'data_final'=>'required|date|after:data_inicio|before:now',
            'internamento'=>'integer',
            'ambulatorio'=>'integer',
            'servicos'=>'integer',
        ];
    }
}
