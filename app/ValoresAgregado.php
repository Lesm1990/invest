<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ValoresAgregado extends Model
{
    //
    protected $table = 'valoresagregados';

    protected $fillable = [
        'descripcion', 'valor'
    ];

    public $timestamps = false;

    public function productosVentasDetalles(){

    	return $this->hasMany('ProductosVentasDetalle', 'valoresAgregados_id');
    }
}
