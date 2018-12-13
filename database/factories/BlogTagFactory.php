<?php

use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(\App\Models\Blog\Tag::class, function (Faker $faker) {
    $word = $faker->unique()->word;

    return [
        'name:en' => $word,
        'name:ru' => 'RU: ' . $word,
        'name:pl' => 'PL: ' . $word,
    ];
});
