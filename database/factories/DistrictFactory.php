<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\District;
use Faker\Generator as Faker;

$factory->define(District::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->unique()->sentence,
        'location' => $faker->unique()->streetAddress,
    ];
});
