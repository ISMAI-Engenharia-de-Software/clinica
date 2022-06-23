<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RelatorioFaturaRequest extends FormRequest
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
            'data_inicio'=>'required|date|before_or_equal:data_final',
            'data_final'=>'required|date|after_or_equal:data_inicio|before_or_equal:now',
            'internamento'=>'integer',
            'ambulatorio'=>'integer',
            'servicos'=>'integer',
        ];
    }
}
