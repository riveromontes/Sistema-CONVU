<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Aviones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('aviones', function (Blueprint $table){
           $table->create();
           
           //crea un campo autoincrementable que será la clave primaria
           $table->increments('id');

           //campo para guardar de la placa del avion
           $table->string('placa');  
            //campo para guardar el modelo del avion
           $table->string('modelo');
           //campo para guardar la marca del avion
           $table->string('marca');
           //campo para guardar la lectura de tacometro 6 enteros y 2 decimales
           $table->decimal('tacometro', 6, 2);
          

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
        Schema::dropIfExists('aviones');
    }
}
