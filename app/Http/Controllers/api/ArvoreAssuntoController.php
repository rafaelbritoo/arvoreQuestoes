<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Assunto;
use Illuminate\Http\Request;

class ArvoreAssuntoController extends Controller
{
    /**
     * Pega a arvore de assuntos baseados no id de orgão e no id da banca
     *
     * @return \Illuminate\Http\Response
     */
    public function getArvoreByOrgaoAndBanca($orgao, $banca)
    {
        try {
            $assunto = new Assunto();
            $dados = $assunto->getArvoresByOrgaoAndBanca($orgao, $banca);
//            var_dump($dados);
            $dados = $this->trataArvore($dados);

            $resposta = response()->json([
                'error' => false,
                'message'  => "Árvores de assunto recuperadas.",
                'data' => $dados
            ], 200);
        }catch (\Exception $e){
            $resposta = response()->json([
                'error' => true,
                'exception' => $e->getMessage(),
                'message' => 'Não foi possível recuperar.',
                'data'  => [],
            ], 400);
        }
        return $resposta;
    }

    private function trataArvore($arrAssuntos, $assuntoPai = null)
    {
        $arrRetorno = [];
        foreach ($arrAssuntos as &$assunto) {
            if($assuntoPai == $assunto->id_assunto_pai) {
                $assunto->filhos = $this->trataArvore($arrAssuntos, $assunto->id);
                $arrRetorno[] = $assunto;
            }
        }
        return $arrRetorno;
    }
}
