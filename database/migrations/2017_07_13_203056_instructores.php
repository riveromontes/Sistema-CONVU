<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Instructores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('instructores', function($table)
        {
           $table->create();
           
           //crea un campo autoincrementable que será la clave primaria
           $table->increments('id');

           //campo para guardar de la cedula
           $table->string('cedula');  
            //campo para guardar el nombre
           $table->string('nombre');
           //campo para guardar el apellido
           $table->string('apellido');
           //campo para guardar la ciudad
           $table->string('ciudad-domicilio');
           //campo para guardar el teléfono de casa
           $table->string('telefono-casa');
           //campo para guardar el telefono celular
           $table->string('telefono-celular');
           //campo para guardar el correo electronico
           $table->string('email');


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
         Schema::dropIfExists('instructores');
    }
}
