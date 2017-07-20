<?php

use Illuminate\Database\Seeder;

class AlumnosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$nombre = array("Pedro", "Juan", "Marta", "Cristina", "Luis", "Carlos");
    	$apellido = array("Brito", "Fuentes", "Perez", "Rojas", "Marcano", "Biro");
    	$ciudad = array("Barcelona", "Puerto La Cruz", "Guanta", "Lecheria");
    	$cod_tlf = array("0281", "0295", "0212");
    	$cod_cel = array("0426", "0416", "0424", "0414", "0412");
    	$email = array("gmail", "hotmail", "outlook", "yahoo");

    	for($i=0; $i<10; $i++)
    	{
    		$cedula_aux = 'V-'.rand(1000000,60000000);
	        $nombre_aux = $nombre[rand(0,5)];
	        $apellido_aux = $apellido[rand(0,5)];
	        $ciudad_domicilio_aux = $ciudad[rand(0,3)];
	        $telefono_casa_aux = $cod_tlf[rand(0,2)]."-".rand(1000000,9999999);
	        $telefono_celular_aux = $cod_cel[rand(0,4)]."-".rand(1000000,9999999);
	        $email_aux = $nombre_aux."_".$apellido_aux."@".$email[rand(0,3)].".com";



	        DB::table('alumnos')->insert(array(
	        'cedula' => $cedula_aux,
	        'nombre' =>  $nombre_aux,
	        'apellido' =>  $apellido_aux,
	        'ciudad_domicilio' =>  $ciudad_domicilio_aux,
	        'telefono_casa' =>  $telefono_casa_aux,
	        'telefono_celular' =>  $telefono_celular_aux,
	        'email' => $email_aux
	        ));
	    }
    }
}
