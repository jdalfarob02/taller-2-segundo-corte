<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Jardin;
use Faker\Generator as Faker;

$factory->define(Jardin::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->randomElement(['girasol','palmera','plantas','ortalisas','mataraton']),
        'cantidad' => $faker->unique()->randomElement(['50','20','200','300','45'])
    ];
});
