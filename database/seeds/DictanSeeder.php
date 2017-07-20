<?php

use Illuminate\Database\Seeder;

class DictanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $id_alumno = DB::table('alumnos')->pluck('id');
        $numero_alumno = DB::table('alumnos')->count();

        $id_instructor = DB::table('instructores')->pluck('id');
        $numero_instructor = DB::table('instructores')->count();

        $id_vuelo = DB::table('vuelos')->pluck('id');
        $numero_vuelo = DB::table('vuelos')->count();


    	for($i=0; $i<5; $i++)
    	{
        	DB::table('dictan')->insert(array(
	        	'id_alumnos' => $id_alumno[rand(0,$numero_alumno-1)],
	        	'id_instructores' =>  $id_instructor[rand(0,$numero_instructor-1)],
	        	'id_vuelos' =>  $id_vuelo[rand(0,$numero_vuelo-1)]
	        ));
        }
    }
}
