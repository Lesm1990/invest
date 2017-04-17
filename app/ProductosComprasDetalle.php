<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductosComprasDetalle extends Model
{
    //
    protected $table = 'productoscomprasdetalle';

    protected $fillable = [
        'fecha', 'cantidad', 'precio', 'compras_id', 'productos_id'
    ];

    public $timestamps = false;

    public function producto(){

    	return $this->belongsTo('App\Producto');
    }

    public function compra(){

    	return $this->belongsTo('App\Compra');
    }
}
