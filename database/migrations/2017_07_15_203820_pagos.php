<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pagos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pagos', function (Blueprint $table){
           $table->create();
           $table->engine = 'InnoDB';
           
           //crea un campo autoincrementable que será la clave primaria
           $table->increments('id');

           //campo de clave foranea para enlazar con la tabla de alumnos
           $table->integer('id_alumnos')->unsigned();
           $table->foreign('id_alumnos')->references('id')->on('alumnos');  
            //campo para guardar la fecha del pago
           $table->date('fecha');
           //campo para guardar el monto del pago
           $table->decimal('monto', 6, 2);
           //campo para guardar las horas pagadas
           $table->decimal('horas', 6, 2);
           //campo para guardar el tipo de pago efectivo o transf
           $table->string('tipo');
          

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
        Schema::dropIfExists('pagos');
    }
}
