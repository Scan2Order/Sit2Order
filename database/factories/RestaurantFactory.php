<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\restaurant;
use Faker\Generator as Faker;

$factory->define(restaurant::class, function (Faker $faker) {
    return [
        'name' => $faker->catchPhrase,
        'address' => $faker->city,
        'phone' => $faker->phoneNumber,
    ];
});
