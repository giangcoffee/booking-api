<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Price;
use Faker\Generator as Faker;

$factory->define(Price::class, function (Faker $faker) {
    return [
        'date' => $faker->dateTimeBetween('-1 month', 'now'),
        'amount' => $faker->randomFloat(2, 10, 500)
    ];
});
