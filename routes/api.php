<?php

    Route::apiResource('banca', 'api\BancaController');
    Route::apiResource('orgao', 'api\OrgaoController');
//    Route::apiResource('programa', 'api\ArvoreAssuntoController');
    Route::get('arvores-assuntos/orgao/{orgao}/banca/{banca}', 'api\ArvoreAssuntoController@getArvoreByOrgaoAndBanca');

