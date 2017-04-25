<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoProducto extends Model
{
    //
    protected $table = 'tipoproductos';

    protected $fillable = [
        'descripcion'
    ];

    public $timestamps = false;

    public function productos(){

    	return $this->hasMany('App\Producto', 'tipoProductos_id');
    }
}
