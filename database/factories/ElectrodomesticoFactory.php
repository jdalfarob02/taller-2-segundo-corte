<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Electrodomestico;
use Faker\Generator as Faker;

$factory->define(Electrodomestico::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->randomElement(['computador','plancha','relojes','abanicos','televisores']),
        'tipo' => $faker->unique()->randomElement(['ahorrador','duramax','sony','pumba','smart'])
    ];
});
