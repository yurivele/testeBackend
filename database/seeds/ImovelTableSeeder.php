<?php

use Illuminate\Database\Seeder;

class ImovelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('imovels')->insert([
        	'codigo' => '0001',
        	'tipo' => 'Apartamento',
        	'pretensao' => 'Vender',
        	'titulo' => 'Apartamento em Intermares',
        	'detalhes' => 'Ótimo apto. a beira mar, 4º andar, piscina, churrasqueira, nascente, em frente a principal',
        	'quartos' => '2',
        	'valor' => '300000',
        ]);
        DB::table('imovels')->insert([
        	'codigo' => '0002',
        	'tipo' => 'Casa',
        	'pretensao' => 'Alugar',
        	'titulo' => 'Casa nos Bancários',
        	'detalhes' => 'Excelente casa, de esquina, 4 quartos, próx. a praça da Paz',
        	'quartos' => '4',
        	'valor' => '2000',
        ]);
        DB::table('imovels')->insert([
        	'codigo' => '0003',
        	'tipo' => 'Terreno',
        	'pretensao' => 'Vender',
        	'titulo' => 'Terreno no Valentina',
        	'detalhes' => 'Localizado em frente a principal, medindo 10x20m',
        	'quartos' => '0',
        	'valor' => '150000',
        ]);
        DB::table('imovels')->insert([
        	'codigo' => '0004',
        	'tipo' => 'Loja',
        	'pretensao' => 'Alugar',
        	'titulo' => 'Sala no centro',
        	'detalhes' => 'Sala comercial, medindo 20m², perto da lagoa. Ótima localização',
        	'quartos' => '0',
        	'valor' => '3500',
        ]);
    }
}
