<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Availability;
use Faker\Generator as Faker;

$factory->define(Availability::class, function (Faker $faker) {
    return [
        'date' => $faker->dateTimeBetween('-1 month', 'now'),
        'stock' => $faker->numberBetween(1, 20),
        'stop_sale' => false,
    ];
});
