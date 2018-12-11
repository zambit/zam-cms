<?php

use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Language::class, function (Faker $faker) {
    return [
        'name' => sprintf('Язык %s', $faker->languageCode),
        'slug' => $faker->languageCode,
        'flag' => null,
    ];
});