<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('productos', function(Blueprint $table){
            $table->increments('id');
            $table->string('nombre_producto', 25);
            $table->integer('cantidad_producto');
            $table->integer('tipoProductos_id')->unsigned();
            $table->decimal('costo', 15, 2);
            $table->timestamps();

            $table->foreign('tipoProductos_id')->references('id')->on('tipoProductos')->onDelete('cascade');

            /*
             id_producto INTEGER NOT NULL , 
     nombre_producto VARCHAR (25) NOT NULL , 
     cantidad_producto INTEGER NOT NULL , 
     tipoProductos_id_tipo_producto INTEGER NOT NULL , 
     costo BIGINT NOT NULL 
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
        Schema::dropIfExists('productos');
    }
}
