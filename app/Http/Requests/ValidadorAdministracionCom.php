<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidadorAdministracionCom extends FormRequest
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
            'componente'=>'required',
            'instrumento'=>'required',
            'cantidad'=>'required',
            'precioCompra'=>'required',
            'precioVenta'=>'required',
            
        ];
        
    }
}
