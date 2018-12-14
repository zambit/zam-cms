<?php

use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Page::class, function (Faker $faker) {
    $title = $faker->sentence;
    $description = $faker->sentences(3, true);
    $content = $faker->sentences(20, true);
    $keywords = implode(', ', $faker->words(5));

    return [
        'title:en' => 'EN: ' . $title,
        'description:en' => 'EN: ' . $description,
        'keywords:en' => 'EN: ' . $keywords,
        'content:en' => 'EN: ' . $content,

        'title:ru' => 'RU: ' . $title,
        'description:ru' => 'RU: ' . $description,
        'keywords:ru' => 'RU: ' . $keywords,
        'content:ru' => 'RU: ' . $content,

        'title:pl' => 'PL: ' . $title,
        'description:pl' => 'PL: ' . $description,
        'keywords:pl' => 'PL: ' . $keywords,
        'content:pl' => 'PL: ' . $content,
    ];
});
