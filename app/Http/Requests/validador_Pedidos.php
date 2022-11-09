<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validador_Pedidos extends FormRequest
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
            'slcEmpresa'=>'Required|in:Ejemp1,Ejemp2',
            'slcProveedor'=>'Required',
            'slcArticulo'=>'Required',
            'nmCantidad'=>'Required',
        ];
    }
}
