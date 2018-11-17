<?php

namespace SoftVet\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Routing\Route;

class UserUpdateRequest extends FormRequest
{
  protected $route;
  public function __construct(Route $route)
  {
    $this->route = $route;
    //dd($this->route->parameter('Usuario'));
  }
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
          'nick'=>'required|unique:usuarios,nick,'.$this->route->parameter('Usuario'),
          'password'=>'required|confirmed|min:6',
          'password_confirmation'=>'required',
          'id_rol'=>'required',
        ];
    }
}
