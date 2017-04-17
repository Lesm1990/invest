<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('proveedores', function(Blueprint $table){
            $table->increments('id');
            $table->string('rif', 25);
            $table->string('nombre', 30);
            $table->integer('user_id')->nullable()->unsigned();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            /*
             id_proveedor INTEGER NOT NULL , 
     rif VARCHAR (25) NOT NULL , 
     nombre VARCHAR (30) NOT NULL 
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
        Schema::dropIfExists('proveedores');
    }
}
