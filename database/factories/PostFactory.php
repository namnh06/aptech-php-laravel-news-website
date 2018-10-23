<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->realText(20),
        'description' => $faker->realText(50),
        'image' => $faker->imageUrl,
        'content' => $faker->randomHtml(2, 3),
    ];
});
