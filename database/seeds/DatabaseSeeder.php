<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        
        //$this->call('AvionesSeeder');
        //$this->call('AlumnosSeeder');
        //$this->call('InstructoresSeeder');
        //$this->call('VuelosSeeder');
        //$this->call('DictanSeeder');
        $this->call('PagosSeeder');
    }
}
