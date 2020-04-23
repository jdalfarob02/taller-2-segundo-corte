<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Utencilio;
use Faker\Generator as Faker;

$factory->define(Utencilio::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->randomElement(['escobas','manteles','hoyas','gel','lapices']),
        'tipo' => $faker->unique()->randomElement(['electrica','flexibles','platino','extra fuerte','resistente al oxido'])
    ];
});
