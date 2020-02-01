<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Booking;
use Faker\Generator as Faker;

$factory->define(Booking::class, function (Faker $faker) {
    return [
        'identifier' => $faker->uuid,
        'start_date' => $faker->dateTimeBetween('-3 months', '-2 months'),
        'end_date' => $faker->dateTimeBetween('-2 months', '-1 month'),
        'currency' => 'EUR',
        'requests' => $faker->sentence(),
        'comments' => $faker->sentence(),
        'status' => 'Commit',
        'total_amount' => $faker->randomFloat(2, 100, 1000),
        'voucher_number' => $faker->md5
    ];
});
