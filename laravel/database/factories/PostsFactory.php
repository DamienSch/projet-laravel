<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Posts;
use Faker\Generator as Faker;
$text = config('sizes');

/* Fake data posts */
$factory->define(App\Posts::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),
        'description' => $faker->paragraph(),
        'picture_id' => '1',
        'sizes' => implode(',', collect(['XS', 'S', 'M', 'L', 'XL'])->shuffle()->slice(0, rand(1, 4))->toArray()),
        'price' => $faker->randomFloat(2, 1, 300),
        'soldes' => $faker->boolean($chanceOfGettingTrue = 50),
        'keyProduct' => $faker->numberBetween($min = 1000000000000000, $max = 9999999999999999),
        'visibility' => $faker->boolean($chanceOfGettingTrue = 50),
        'category_id' => rand(1, 2),
    ];
});
