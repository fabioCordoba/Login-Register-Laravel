<?php

namespace SoftVet;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
//use Illuminate\Database\Eloquent\Model;

class Usuario extends Authenticatable
{
  use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'id_rol', 'supersu', 'nick', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function setPasswordAttribute($valor){
      if(!empty($valor)){
        $this->attributes['password'] = \Hash::make($valor);
      }
    }

}
