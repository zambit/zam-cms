<?php

use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Page::class, function (Faker $faker) {
    $title = $faker->sentence;
    $description = $faker->sentences(3, true);
    $content = json_encode([
        'test' => 'fff',
        'demo' => [
            'q' => 111,
            'w' => true,
        ],
    ]);
    $keywords = implode(', ', $faker->words(5));

    return [
        'title:en' => 'EN: ' . $title,
        'description:en' => 'EN: ' . $description,
        'keywords:en' => 'EN: ' . $keywords,
        'content:en' => $content,

        'title:ru' => 'RU: ' . $title,
        'description:ru' => 'RU: ' . $description,
        'keywords:ru' => 'RU: ' . $keywords,
        'content:ru' => $content,

        'title:pl' => 'PL: ' . $title,
        'description:pl' => 'PL: ' . $description,
        'keywords:pl' => 'PL: ' . $keywords,
        'content:pl' => $content,
    ];
});
