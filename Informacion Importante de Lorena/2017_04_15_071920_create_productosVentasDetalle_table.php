<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosVentasDetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('productosVentasDetalle', function(Blueprint $table){
            $table->increments('id');
            $table->integer('productos_id')->unsigned();
            $table->integer('ventas_id')->unsigned();
            $table->date('fecha');
            $table->integer('valoresAgregados_id')->unsigned();
            $table->integer('cantidad');
            $table->decimal('precio', 15, 2);

            $table->foreign('productos_id')->references('id')->on('productos')->onDelete('cascade');
            $table->foreign('ventas_id')->references('id')->on('ventas')->onDelete('cascade');
            $table->foreign('valoresAgregados_id')->references('id')->on('valoresAgregados')->onDelete('cascade');

            /*
            id_detalle como clave primaria porque laravel no soporta claves primarias compuestas
            Productos_id_producto INTEGER NOT NULL , 
             ventas_id_venta INTEGER NOT NULL , 
             fecha DATE NOT NULL , 
             valoresAgregados_id_valor_agregado INTEGER NOT NULL , 
             cantidad INTEGER NOT NULL , 
             precio BIGINT NOT NULL //Debe ser decimal
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
        Schema::dropIfExists('productosVentasDetalle');
    }
}
