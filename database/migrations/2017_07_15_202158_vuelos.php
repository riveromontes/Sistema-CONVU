<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Vuelos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vuelos', function (Blueprint $table){
           $table->create();
           $table->engine = 'InnoDB';
           
           //crea un campo autoincrementable que será la clave primaria
           $table->increments('id');

           //campo de clave foranea para enlazar con la tabla de aviones
           $table->integer('id_aviones')->unsigned();
           $table->foreign('id_aviones')->references('id')->on('aviones');  
            //campo para guardar la fecha del vuelo
           $table->date('fecha');
           //campo para guardar la lectura inicial del tacometro
           $table->decimal('tac_inicial', 6, 2);
           //campo para guardar la lectura final del tacometro
           $table->decimal('tac_final', 6, 2);
          

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
        Schema::dropIfExists('vuelos');
    }
}
