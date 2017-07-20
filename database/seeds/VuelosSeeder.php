<?php


use Illuminate\Database\Seeder;

class VuelosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $id_avion = DB::table('aviones')->pluck('id');
        $numero = DB::table('aviones')->count();


        for($i=0; $i<5; $i++)
    	{
    		$fecha = rand(1,30)."-".rand(1,12)."-".rand(2015,2017);
    		//si la fecha es separada por slash es m/d/Y (strtotime)
    		//si la fecha es serpara por dash es d-m-Y (strtotime)
        	$tac_inicial = rand(0,900000) / 100;
        	$tac_final = $tac_inicial + (rand(0,90000) / 100);


        	DB::table('vuelos')->insert(array(
	        	'id_aviones' => $id_avion[rand(0,$numero-1)],
	        	'fecha' => date('Y-m-d', strtotime($fecha)),
	        	'tac_inicial' => $tac_inicial,
	        	'tac_final' => $tac_final
	        ));
        }
    }
}
