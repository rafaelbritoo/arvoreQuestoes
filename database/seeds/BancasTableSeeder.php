<?php

use Illuminate\Database\Seeder;

class BancasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bancas')->insert([
            ['id' => '1', 'sigla' => 'Cespe / Cebraspe',  'nome' => 'Centro de Seleção e de Promoção de Eventos UnB'],
            ['id' => '2', 'sigla' => 'Cesgranrio',  'nome' => 'Fundação CESGRANRIO'],
            ['id' => '3', 'sigla' => 'Quadrix',  'nome' => 'Instituto QUADRIX'],
            ['id' => '4', 'sigla' => 'COTEC',  'nome' => 'Comissão Técnica de Concursos'],
            ['id' => '5', 'sigla' => 'CCS',  'nome' => 'Coordenadoria do Centro de Seleção'],
            ['id' => '6', 'sigla' => 'VUNESP',  'nome' => 'Fundação para o Vestibular da Universidade Estadual Paulista'],
        ]);
    }
}
