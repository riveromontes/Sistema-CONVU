<?php

use Illuminate\Database\Seeder;

class PagosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $id_alumno = DB::table('alumnos')->pluck('id');
        $numero = DB::table('alumnos')->count();

        $tipo = array("efectivo", "transferencia", "cheque");


        for($i=0; $i<5; $i++)
    	{
    		$fecha = rand(1,30)."-".rand(1,12)."-".rand(2015,2017);
    		//si la fecha es separada por slash es m/d/Y (strtotime)
    		//si la fecha es serpara por dash es d-m-Y (strtotime)
        	$horas = rand(0,9000) / 100;
        	$valor = rand(100,150);


        	DB::table('pagos')->insert(array(
	        	'id_alumnos' => $id_alumno[rand(0,$numero-1)],
	        	'fecha' => date('Y-m-d', strtotime($fecha)),
	        	'monto' => $horas*$valor,
	        	'horas' => $horas,
	        	'tipo' => $tipo[rand(0,2)]
	        ));
        }
    }
}
