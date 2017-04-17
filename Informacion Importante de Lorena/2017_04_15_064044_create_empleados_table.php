<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('empleados', function(Blueprint $table){
            $table->increments('id');
            $table->string('nombre', 20);
            $table->string('apellido', 20);
            $table->string('identificacion', 15);
            $table->string('direccion', 40)->nullable();
            $table->string('telefono', 15);
            $table->integer('tipoIdentificacion_id')->unsigned();
            $table->integer('user_id')->nullable()->unsigned();
            $table->timestamps();

            $table->foreign('tipoIdentificacion_id')->references('id')->on('tipoIdentificacion')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            /*
            id_empleado INTEGER NOT NULL , 
             nombre VARCHAR (20) NOT NULL , 
             apellido VARCHAR (20) NOT NULL , 
             identificacion VARCHAR (15) NOT NULL , 
             direccion VARCHAR (40) , 
             telefono VARCHAR (15) NOT NULL , 
             tipoIdentificacion_id_tipo_identificacion INTEGER NOT NULL 
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
        Schema::dropIfExists('empleados');
    }
}
