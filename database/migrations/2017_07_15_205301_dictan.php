<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Dictan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dictan', function (Blueprint $table){
            $table->create();
            $table->engine = 'InnoDB';
           
            //crea un campo autoincrementable que será la clave primaria
            $table->increments('id');

            //campo de clave foranea para enlazar con la tabla de alumnos
            $table->integer('id_alumnos')->unsigned();
            $table->foreign('id_alumnos')->references('id')->on('alumnos');  
           
            //campo de clave foranea para enlazar con la tabla de instructores
            $table->integer('id_instructores')->unsigned();
            $table->foreign('id_instructores')->references('id')->on('instructores'); 

            //campo de clave foranea para enlazar con la tabla de vuelos
            $table->integer('id_vuelos')->unsigned();
            $table->foreign('id_vuelos')->references('id')->on('vuelos');

            //crea campo automatico con la fecha 
            //de creacion y actualizacion del registro 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dictan');
    }
}
