<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\mnh_post;
use Faker\Generator as Faker;

$factory->define(mnh_post::class, function (Faker $faker) {
    return [
        'id_var' => $faker->numberBetween($min = 1, $max = 3),
        'title' => $faker->sentence($nbWords = 6, true),
        'desc' => $faker->sentence($nbWords = 16, true),
        'place' => $faker->sentence($nbWords = 2, true),
        'status' => $faker->numberBetween($min = 0, $max = 1),
        'visitor' => $faker->numberBetween($min = 300, $max = 100000),
        'content' => $faker->paragraphs(rand(2,10), true),
        'image' => '',
    ];
});
