<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Questao extends Model
{
    use SoftDeletes;

    public function banca(){
        return $this->hasOne('App\Model\Banca');
    }
    public function orgao(){
        return $this->hasOne('App\Model\Orgao');
    }
    public function assunto(){
        return $this->hasOne('App\Model\Assunto');
    }
}
