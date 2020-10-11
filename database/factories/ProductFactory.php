<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\product;
use Faker\Generator as Faker;

$factory->define(product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'categories' => $faker->randomElement(['Roti', 'Nasi', 'Goreng', 'Minuman']),
        'description' => $faker->paragraph,
        'price' => $faker->randomDigit,
    ];
});
