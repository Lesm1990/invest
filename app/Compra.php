<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    //
    protected $table = 'compras';

    protected $fillable = [
        'fecha_registro', 'fecha_factura', 'proveedores_id', 'empleados_id'
    ];

    public $timestamps = false;

    public function proveedor(){
        
        return $this->belongsTo('App\Proveedor');
    }

    public function empleado(){
        
        return $this->belongsTo('App\Empleado');
    }

    public function productosComprasDetalles(){

    	return $this->hasMany('App\ProductosComprasDetalle', 'compras_id');
    }
}
