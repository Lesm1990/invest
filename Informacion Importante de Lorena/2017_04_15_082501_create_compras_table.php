<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('compras', function(Blueprint $table){
            $table->increments('id');
            $table->integer('proveedores_id')->unsigned();
            $table->integer('empleados_id')->unsigned();
            $table->timestamps();

            $table->foreign('proveedores_id')->references('id')->on('proveedores')->onDelete('cascade');
            $table->foreign('empleados_id')->references('id')->on('empleados')->onDelete('cascade');

            /*
             id_compra INTEGER NOT NULL , 
     proveedores_id_proveedor INTEGER NOT NULL , 
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
        Schema::dropIfExists('compras');
    }
}
