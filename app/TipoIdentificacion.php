<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoIdentificacion extends Model
{
    //
    protected $table = 'tipoidentificacion';

    protected $fillable = [
        'descripcion'
    ];

    public $timestamps = false;

    public function clientes(){

    	return $this->hasMany('App\Cliente', 'tipoIdentificacion_id');
    }

    public function empleados(){

    	return $this->hasMany('App\Empleado', 'tipoIdentificacion_id');
    }
}
