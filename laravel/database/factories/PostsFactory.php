<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Posts;
use Faker\Generator as Faker;

$factory->define(App\Posts::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),
        'description' => $faker->paragraph(),
        'sizes' => implode(',', collect(config('sizes'))->shuffle()->slice(0, rand(1, 4))->toArray()),
        'price' => $faker->randomFloat(2, 1, 300),
        'soldes' => $faker->boolean($chanceOfGettingTrue = 50),
        'visibility' => $faker->boolean($chanceOfGettingTrue = 50),
        'category_id' => rand(1, 2),
    ];
});
