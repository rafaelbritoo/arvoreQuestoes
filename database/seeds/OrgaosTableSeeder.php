<?php

use Illuminate\Database\Seeder;

class OrgaosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orgaos')->insert([
            ['id' => '1', 'sigla' => 'PCDF',  'nome' => 'Polícia Civil do DF'],
            ['id' => '2', 'sigla' => 'EBSERH',  'nome' => 'Empresa Brasileira de Serviços Hospitalares'],
            ['id' => '3', 'sigla' => 'TRE PA',  'nome' => 'Tribunal Regional Eleitoral do Pará'],
            ['id' => '4', 'sigla' => 'TRF 3',  'nome' => 'Tribunal Regional Federal da 3ª Região'],
            ['id' => '5', 'sigla' => 'SEFAZ DF',  'nome' => 'Secretaria de Estado de Fazenda do Distrito Federal'],
            ['id' => '6', 'sigla' => 'SPPREV',  'nome' => 'São Paulo Previdência'],
            ['id' => '7', 'sigla' => 'TJ PA',  'nome' => 'Tribunal de Justiça do Estado do Pará'],
        ]);
    }
}
