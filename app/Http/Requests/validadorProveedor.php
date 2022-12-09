<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorProveedor extends FormRequest
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
            //
            'txtEmpresa'=> 'required',
            'txtDireccion'=> 'required',
            'txtPais'=> 'required',
            'txtContacto'=> 'required',
            'txtNumero'=> 'required|numeric|Digits_between:10,num|max:10|min:10',
            'txtCelular'=> 'required|numeric|Digits_between:10,num|max:10|min:10',
            'txtCorreo'=> 'required|email',
        ];
    }
}
