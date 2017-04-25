<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //
    protected $table = 'clientes';

    protected $fillable = [
        'nombre', 'apellido', 'direccion', 'telefono', 'email', 'num_identificacion', 'tipoIdentificacion_id', 'user_id'
    ];

    public $timestamps = false;

    public function tipoidentificacion(){
        
        return $this->belongsTo('App\TipoIdentificacion', 'tipoIdentificacion_id');
    }

    public function user(){
        
        return $this->belongsTo('App\User', 'user_id');
    }

    public function ventas(){

    	return $this->hasMany('App\Venta', 'clientes_id');
    }
}
