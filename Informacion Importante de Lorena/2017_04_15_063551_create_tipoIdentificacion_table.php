<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoIdentificacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('tipoIdentificacion', function(Blueprint $table){
            $table->increments('id');
            $table->string('descripcion', 15);

        /*
        id_tipo_identificacion INTEGER NOT NULL , 
        descripcion VARCHAR (15) NOT NULL 
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
        Schema::dropIfExists('tipoIdentificacion');
    }
}
