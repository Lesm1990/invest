<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    //
    protected $table = 'proveedores';

    protected $fillable = [
        'rif', 'nombre', 'telefono', 'email', 'user_id'
    ];

    public $timestamps = false;

    public function user(){

    	return $this->belongsTo('App\User', 'user_id');
    }

    public function compras(){

    	return $this->hasMany('App\Compra', 'proveedores_id');
    }
}
