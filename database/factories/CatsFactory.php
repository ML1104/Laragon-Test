<?php

use \App\Cat;
use Faker\Generator as Faker;

$factory->define(Cat::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName,
        'age' => $faker->numberBetween(1, 15),
        'gender' => $faker->randomElement(['male', 'female'])
    ];
});
