<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Questao;
use Faker\Generator as Faker;

$factory->define(Questao::class, function (Faker $faker) {
    return [
        'titulo' => $faker->sentence(3,true),
        'descricao' => $faker->sentence(5)
    ];
});