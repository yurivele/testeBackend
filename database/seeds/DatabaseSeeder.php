<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
    	$this->call(ImovelTableSeeder::class);
    	$this->call(InteressadoTableSeeder::class);
    	$this->call(Imovel_InteressadoTableSeeder::class);
    
        
    }
}
