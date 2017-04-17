<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    //
    protected $table = 'ventas';

    protected $fillable = [
        'descripcion', 'clientes_id', 'empleados_id'
    ];

    public $timestamps = false;

    public function cliente(){

    	return $this->belongsTo('App\Cliente');
    }

    public function empleado(){

    	return $this->belongsTo('App\Empleado');
    }

    public function productosVentasDetalles(){

    	return $this->hasMany('App\ProductosVentasDetalle', 'ventas_id');
    }
}
