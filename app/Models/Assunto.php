<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Assunto extends Model
{
    use SoftDeletes;

    public function getPai(){
        return $this->hasOne('App\Model\Assunto','id_assunto_pai');
    }


    public function getArvoresByOrgaoAndBanca($orgao, $banca)
    {
        $results = DB::select("
        SELECT
            ass.id,
            ass.id_assunto_pai,
            ass.nome,
            ass.ordem,
            COUNT(que.id) AS total
        FROM
            ggeducacao.assuntos ass
                LEFT JOIN
            ggeducacao.questaos que ON ass.id = que.id_assunto AND que.deleted_at IS NULL AND id_orgao = ? AND id_banca = ?
        WHERE
            ass.deleted_at IS NULL AND ass.ordem IS NOT NULL
        GROUP BY
            1,2,3,4
        ORDER BY
            ass.ordem ASC",
            [$orgao, $banca]
        );
        return $results;
    }
}
