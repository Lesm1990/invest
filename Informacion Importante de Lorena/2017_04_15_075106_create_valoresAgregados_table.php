<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateValoresAgregadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('valoresAgregados', function(Blueprint $table){
            $table->increments('id');
            $table->string('descripcion', 20);
            $table->decimal('valor', 15, 2);

            /*
             id_valor_agregado INTEGER NOT NULL , 
             descripcion VARCHAR (20) NOT NULL , 
             valor BIGINT NOT NULL 
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
        Schema::dropIfExists('valoresAgregados');
    }
}
