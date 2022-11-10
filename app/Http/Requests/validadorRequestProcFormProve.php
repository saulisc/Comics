<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorRequestProcFormProve extends FormRequest
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
            'txtEmpresaProv' => 'required',
            'txtDireccionProv' => 'required',
            'txtPaisProv' => 'required',
            'txtContactoProv' => 'required',
            'txtNoFijoProv' => 'required| numeric',
            'txtNoCelProv' => 'required| numeric',
            'txtCorreoProv' => 'required| email'
        ];
    }
}
