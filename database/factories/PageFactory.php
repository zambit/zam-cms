<?php

use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Page::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'description' => $faker->sentences(3, true),
        'keywords' => implode(', ', $faker->words(20)),
        'content' => $faker->sentences(20, true),
    ];
});
