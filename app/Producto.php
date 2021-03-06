<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
    protected $table = 'productos';

    protected $fillable = [
        'nombre_producto', 'cantidad_producto', 'costo', 'tipoProductos_id', 'marca_id'
    ];

    public $timestamps = false;

    public function tipoProducto(){
        
        return $this->belongsTo('App\TipoProducto', 'tipoProductos_id');
    }

    public function marca(){

        return $this->belongsTo('App\Marca', 'marca_id');
    }

    public function productosVentasDetalles(){

    	return $this->hasMany('App\ProductosVentasDetalle', 'productos_id');
    }

    public function productosComprasDetalles(){

    	return $this->hasMany('App\ProductosComprasDetalle', 'productos_id');
    }
}
