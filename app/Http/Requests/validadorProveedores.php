<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorProveedores extends FormRequest
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
            'txtEmpresa' => 'required',
            'txtDireccion' => 'required',
            'txtPais' => 'required',
            'txtContacto' => 'required',
            'txtNumero' => 'required|numeric|Digits_between:13,num',
            'txtCelular' => 'required|numeric|Digits_between:13,num',
            'txtCorreo' => 'required|email',
        ];
    }
}
