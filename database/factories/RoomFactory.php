<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Room;
use Faker\Generator as Faker;

$factory->define(Room::class, function (Faker $faker) {
    return [
        'identifier' => $faker->uuid,
        'name' => $faker->name,
        'description' => $faker->realText(),
        'reservable' => true
    ];
});
