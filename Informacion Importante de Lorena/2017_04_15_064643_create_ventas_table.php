<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('ventas', function(Blueprint $table){
            $table->increments('id');
            $table->integer('clientes_id')->unsigned();
            $table->integer('empleados_id')->unsigned();
            $table->timestamps();

            $table->foreign('clientes_id')->references('id')->on('clientes')->onDelete('cascade');
            $table->foreign('empleados_id')->references('id')->on('empleados')->onDelete('cascade');

            /*
            id_venta INTEGER NOT NULL , 
             Column_2 UNKNOWN               , //no se que es esto...?
             clientes_id_cliente INTEGER NOT NULL , 
             empleados_id_empleado INTEGER NOT NULL 
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
        Schema::dropIfExists('ventas');
    }
}
