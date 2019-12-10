<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Picture;
use Faker\Generator as Faker;

$factory->define(App\Picture::class, function (Faker $faker) {
    return [
        'link' => $faker->image($dir = '/resources/img', $width = 640, $height = 480),
        'name' => $faker->name(),
    ];
});
