<?php

use Illuminate\Database\Seeder;

class Imovel_InteressadoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('imovel_interessado')->insert([
        	'imovel_id' => '1',
        	'interessado_id' => '2',
        ]);
        DB::table('imovel_interessado')->insert([
        	'imovel_id' => '2',
        	'interessado_id' => '3',
        ]);
        DB::table('imovel_interessado')->insert([
        	'imovel_id' => '3',
        	'interessado_id' => '4',
        ]);
        DB::table('imovel_interessado')->insert([
        	'imovel_id' => '4',
        	'interessado_id' => '1',
        ]);
    }
}
