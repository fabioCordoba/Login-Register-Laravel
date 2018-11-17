<?php

namespace SoftVet\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserCreateRequest extends FormRequest
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
          'nombre' => 'required|max:255',
          'nick'=>'required|unique:usuarios,nick',
          'password'=>'required|confirmed|min:6',
          'password_confirmation'=>'required',
          'id_rol'=>'required',
        ];
    }
}
