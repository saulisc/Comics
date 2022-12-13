<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorPedido extends FormRequest
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
            //'txtProveedorID' => 'required',
            'txtProveedor' => 'required',
            'txtItem' => 'required',
            'txtCantidad' => 'required|numeric',
            // 'txtProveedor2' => 'required',
            // 'txtItem2' => 'required',
            // 'txtCantidad2' => 'required|numeric'
        ];
    }
}
