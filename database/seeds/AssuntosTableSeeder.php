<?php

use Illuminate\Database\Seeder;

class AssuntosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('assuntos')->insert([
            ['id' => '1', 'ordem' => '1', 'id_assunto_pai' => null,  'nome' => 'Antropologia'],
            ['id' => '2', 'ordem' => '1001', 'id_assunto_pai' => '1', 'nome' => 'Psicanálise e Antropologia'],
            ['id' => '3', 'ordem' => '1002', 'id_assunto_pai' => '1', 'nome' => 'Antropologia Social'],
            ['id' => '4', 'ordem' => '1003', 'id_assunto_pai' => '1', 'nome' => 'Interacionismo Simbólico e Antropologia Urbana'],
            ['id' => '5', 'ordem' => '1004', 'id_assunto_pai' => '1', 'nome' => 'Etnografia, Etnolinguística, Linguagem e Cultura'],
            ['id' => '6', 'ordem' => '1005', 'id_assunto_pai' => '1', 'nome' => 'Antropologia Forense/ Antropoligia Jurídica'],
            ['id' => '7', 'ordem' => '1003001', 'id_assunto_pai' => '3', 'nome' => 'Organizações políticas'],
            ['id' => '8', 'ordem' => '1004001', 'id_assunto_pai' => '4', 'nome' => 'Antropologia e Cultura no Brasil'],

            ['id' => '9', 'ordem' => '2', 'id_assunto_pai' => null,  'nome' => 'Artes Visuais'],
            ['id' => '10', 'ordem' => '2001', 'id_assunto_pai' => '9', 'nome' => 'História da Arte'],
            ['id' => '11', 'ordem' => '2002', 'id_assunto_pai' => '9', 'nome' => 'História da Arte no Brasil'],
            ['id' => '12', 'ordem' => '2003', 'id_assunto_pai' => '9', 'nome' => 'Teoria em Arte'],
            ['id' => '13', 'ordem' => '2010001', 'id_assunto_pai' => '10', 'nome' => 'Arte Pré-Histórica'],
            ['id' => '14', 'ordem' => '2010002', 'id_assunto_pai' => '10', 'nome' => 'Arte Medieval'],
            ['id' => '15', 'ordem' => '2010003', 'id_assunto_pai' => '10', 'nome' => 'Arte Antiga'],
            ['id' => '16', 'ordem' => '2010004', 'id_assunto_pai' => '10', 'nome' => 'Arte Moderna'],
            ['id' => '17', 'ordem' => '2010005', 'id_assunto_pai' => '10', 'nome' => 'Arte Conteporanea'],
            ['id' => '18', 'ordem' => '2011001', 'id_assunto_pai' => '11', 'nome' => 'Arte Pré-Histórica'],
            ['id' => '19', 'ordem' => '2011002', 'id_assunto_pai' => '11', 'nome' => 'Arte Indígena'],
            ['id' => '20', 'ordem' => '2011003', 'id_assunto_pai' => '11', 'nome' => 'Barroco'],
            ['id' => '21', 'ordem' => '2011004', 'id_assunto_pai' => '11', 'nome' => 'Rococó'],
            ['id' => '22', 'ordem' => '2011005', 'id_assunto_pai' => '11', 'nome' => 'Neoclassicismo'],
            ['id' => '23', 'ordem' => '2011005', 'id_assunto_pai' => '11', 'nome' => 'Romantismo'],
            ['id' => '24', 'ordem' => '2011005', 'id_assunto_pai' => '11', 'nome' => 'Modernismo'],
            ['id' => '25', 'ordem' => '2011005', 'id_assunto_pai' => '11', 'nome' => 'Contemporaneidade'],

            ['id' => '26', 'ordem' => '3', 'id_assunto_pai' => null, 'nome' => 'ECONOMIA'],
            ['id' => '27', 'ordem' => '3001', 'id_assunto_pai' => '26', 'nome' => 'INTRODUÇÃO A ECONOMIA'],
            ['id' => '28', 'ordem' => '3002', 'id_assunto_pai' => '26', 'nome' => 'MICROECONOMIA'],
            ['id' => '29', 'ordem' => '3027001', 'id_assunto_pai' => '27', 'nome' => 'Conceito de Economia'],
            ['id' => '30', 'ordem' => '3027002', 'id_assunto_pai' => '27', 'nome' => 'Escassez e Problemas Econômicos Fundamentais'],
            ['id' => '31', 'ordem' => '3027003', 'id_assunto_pai' => '27', 'nome' => 'Organização Econômica / Sistemas Econômicos'],
            ['id' => '32', 'ordem' => '3027004', 'id_assunto_pai' => '27', 'nome' => 'Curva ou Fronteira de Possibilidades de Produção'],
            ['id' => '33', 'ordem' => '3027005', 'id_assunto_pai' => '27', 'nome' => 'Análise Positiva e Análise Normativa'],
            ['id' => '34', 'ordem' => '3027006', 'id_assunto_pai' => '27', 'nome' => 'Economia e demais Ciências'],
            ['id' => '35', 'ordem' => '3028001', 'id_assunto_pai' => '28', 'nome' => 'Mercado Financeiro'],
            ['id' => '36', 'ordem' => '3028001', 'id_assunto_pai' => '28', 'nome' => 'Fundamentos da Microeconomia'],
            ['id' => '37', 'ordem' => '3028001', 'id_assunto_pai' => '28', 'nome' => 'Análise da Demanda de Mercado'],
            ['id' => '38', 'ordem' => '3028001', 'id_assunto_pai' => '28', 'nome' => 'Análise da Oferta de Mercado'],
            ['id' => '39', 'ordem' => '3028001', 'id_assunto_pai' => '28', 'nome' => 'Equilíbrio de Mercado'],
            ['id' => '40', 'ordem' => '3028001', 'id_assunto_pai' => '28', 'nome' => 'Teoria do Consumidor'],
        ]);
    }
}