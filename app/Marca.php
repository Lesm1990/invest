<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    //
    protected $table = 'marca';

    protected $fillable = [
        'nombre', 'descripcion'
    ];

    public $timestamps = false;

    public function productos(){

    	return $this->hasMany('App\Producto', 'marca_id');
    }
}
