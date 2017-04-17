<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductosVentasDetalle extends Model
{
    //
    protected $table = 'productosventasdetalle';

    protected $fillable = [
        'fecha', 'cantidad', 'precio', 'productos_id', 'valoresAgregados_id', 'ventas_id'
    ];

    public $timestamps = false;

    public function valoresAgregado(){

    	return $this->belongsTo('App\ValoresAgregado');
    }

    public function venta(){

    	return $this->belongsTo('App\Venta');
    }

    public function producto(){

    	return $this->belongsTo('App\Producto');
    }
}
