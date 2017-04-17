<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    //
    protected $table = 'empleados';

    protected $fillable = [
        'nombre', 'apellido', 'direccion', 'telefono', 'identificacion', 'tipoIdentificacion_id', 'user_id'
    ];

    public $timestamps = false;

    public function tipoIdentificacion(){
        
        return $this->belongsTo('App\TipoIdentificacion');
    }

    public function user(){
        
        return $this->belongsTo('App\User');
    }

    public function ventas(){

    	return $this->hasMany('App\Venta', 'empleados_id');
    }

    public function compras(){

    	return $this->hasMany('App\Compra', 'empleados_id');
    }
}
