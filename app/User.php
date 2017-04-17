<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'tipo', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function cliente(){

        return $this->hasOne('App\Cliente', 'user_id');
    }

    public function empleado(){

        return $this->hasOne('App\Empleado', 'user_id');
    }

    public function proveedor(){

        return $this->hasOne('App\Proveedor', 'user_id');
    }
}
