<?php

use Illuminate\Database\Seeder;

class QuestaosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($banca = 1; $banca <= 6; $banca++){
            for($orgao = 1; $orgao <= 7; $orgao++) {
                factory(App\Models\Questao::class, 500)->create()->each(function ($questao) use ($banca, $orgao){
                    $assunto = 1;
                    while (in_array($assunto,[1,9,26])){
                        $assunto = rand(1,40);
                    }
                    $questao->id_assunto = $assunto;
                    $questao->id_banca   = $banca;
                    $questao->id_orgao   = $orgao;
                    $questao->save();
                });
            }
        }
    }
}
