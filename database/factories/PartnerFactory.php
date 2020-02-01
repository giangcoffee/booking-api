<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Partner;
use App\User;
use Faker\Generator as Faker;

$factory->define(Partner::class, function (Faker $faker) {
    return [
        'identifier' => $faker->uuid,
        'name' => $faker->name,
        'description' => $faker->realText(),
        'status' => 'partner',
        'enabled' => true,
        'currency' => 'EUR',
        'connectedAt' => now(),
        'user_id' => function() {
            return factory(User::class)->create()->id;
        }
    ];
});
