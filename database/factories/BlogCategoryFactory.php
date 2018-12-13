<?php

use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(\App\Models\Blog\Category::class, function (Faker $faker) {
    $word = $faker->unique()->word;
    $description = $faker->sentences(3, true);

    return [
        'name:en' => $word,
        'description:en' => $description,

        'name:ru' => 'RU: ' . $word,
        'description:ru' => 'RU: ' . $description,

        'name:pl' => 'PL: ' . $word,
        'description:pl' => 'PL: ' . $description,
    ];
});
