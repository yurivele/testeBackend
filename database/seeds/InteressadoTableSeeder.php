<?php

use Illuminate\Database\Seeder;

class InteressadoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('interessados')->insert([
        	'nome' => 'Abelardo',
        	'email' => 'abelardinho9009@gmail.com',
        ]);
        DB::table('interessados')->insert([
        	'nome' => 'Gualberto',
        	'email' => 'gualgualberto@hotmail.com',
        ]);
        DB::table('interessados')->insert([
        	'nome' => 'Karla',
        	'email' => 'karlakarlota@gmail.com',
        ]);
        DB::table('interessados')->insert([
        	'nome' => 'Gerusa',
        	'email' => 'gerussa@msn.com',
        ]);
    }
}
