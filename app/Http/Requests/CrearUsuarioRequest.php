<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class CrearUsuarioRequest extends FormRequest
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
            'email' => ['required',Rule::unique('users')], 


            'cedula_rif' => ['required',Rule::unique('users')]
        ];
    }

    public function messages()
    {
        return [

            'email.required' => 'El email es obligatorio.',
            'email.unique' => 'El email ya existe.',         
     
            'cedula_rif.unique' => 'El cédula o rif ya existe.',
            'cedula_rif.required' => 'El ci o rif es obligatorio.'
           
          
        ];
    }
}
