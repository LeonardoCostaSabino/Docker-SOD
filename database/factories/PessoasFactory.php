<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Telefones;
use App\Nucleos;
use App\Enderecos;
use App\Pessoas;
use Faker\Generator as Faker;

$factory->define(Nucleos::class, function (Faker $faker) {
    return [
        'nome' => $faker->name
    ];
});

$factory->define(Enderecos::class, function (Faker $faker) {
    return [
        'cep'=> $faker->randomDigit,
        'complemento' => $faker->name,
        'bairro' => $faker->name,
        'estado' => $faker->name,
        'cidade' => $faker->name,
        'logradouro' => $faker->name,
        'construcao' => $faker->name,
        'situacao' => $faker->name,
        'tempo' => $faker->name,
        'qtdcomodos' => $faker->randomDigit,
        'agua' => $faker->name,
        'saneamento'=> $faker->boolean

    ];
});

$factory->define(Telefones::class, function (Faker $faker) {
    return [
        'ddtel' => $faker->randomDigit,
        'ddcel' => $faker->randomDigit,
        'telefone' => $faker->randomDigit,
        'celular' => $faker->randomDigit,
    ];
});

$factory->define(Pessoas::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'email' => $faker->safeEmail,
        'sis_enderecos_id' => function () {
            return factory(Enderecos::class)->create()->id;
        },
        'sis_telefones_id' => function () {
        return factory(Telefones::class)->create()->id;
        },
        'sis_nucleos_id' => function () {
            return factory(Nucleos::class)->create()->id;
        }
    ];
});



