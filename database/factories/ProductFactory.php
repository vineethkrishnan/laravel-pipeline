<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->userName,
        'color' => $faker->safeColorName,
        'speed' => $faker->numberBetween(100, 1000),
        'price' => $faker->randomFloat(2,500, 5000)
    ];
});
