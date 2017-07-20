<?php

use Illuminate\Database\Seeder;


class AvionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
	{
		for($i=0; $i<10; $i++)
    	{
	        DB::table('aviones')->insert(array(
	        'placa' => 'YV'.rand(1000,9999),
	        'modelo' => '425 CORSAIR',
	        'marca' => 'CESSNA',
	        'tacometro' => rand(0,900000) / 100
	        ));
	    }
	}    
	   
}
