<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosCompraDetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('productosCompraDetalle', function(Blueprint $table){
            $table->increments('id');
            $table->date('fecha');
            $table->integer('Productos_id')->unsigned();
            $table->integer('compras_id')->unsigned();
            $table->integer('cantidad');
            $table->decimal('precio', 15, 2);

            $table->foreign('Productos_id')->references('id')->on('productos')->onDelete('cascade');
            $table->foreign('compras_id')->references('id')->on('compras')->onDelete('cascade');

            /*
            id_detalle_compra por que laravel no soporta claves primarias compuestas
            fecha DATE NOT NULL , 
     Productos_id_producto INTEGER NOT NULL , 
     compras_id_compra INTEGER NOT NULL , 
     cantidad INTEGER NOT NULL , 
     precio BIGINT NOT NULL 
            */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('productosCompraDetalle');
    }
}
