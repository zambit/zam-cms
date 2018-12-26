<?php

use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(\App\Models\Blog\Article::class, function (Faker $faker) {
    $header = $faker->sentence;
    $title = $faker->sentence;
    $description = $faker->sentences(3, true);
    $content = $faker->sentences(20, true);
    $keywords = implode(', ', $faker->words(5));

    return [
        'image' => 'storage/articles/demo.jpg',
        'category_id' => null,
        'author_id' => null,
        'published_at' => $faker->optional()->dateTimeBetween('-5 days', '+5days'),

        'header:en' => 'EN: ' . $header,
        'title:en' => 'EN: ' . $title,
        'description:en' => 'EN: ' . $description,
        'keywords:en' => 'EN: ' . $keywords,
        'content:en' => 'EN: ' . $content,

        'header:ru' => 'RU: ' . $header,
        'title:ru' => 'RU: ' . $title,
        'description:ru' => 'RU: ' . $description,
        'keywords:ru' => 'RU: ' . $keywords,
        'content:ru' => 'RU: ' . $content,

        'header:pl' => 'PL: ' . $header,
        'title:pl' => 'PL: ' . $title,
        'description:pl' => 'PL: ' . $description,
        'keywords:pl' => 'PL: ' . $keywords,
        'content:pl' => 'PL: ' . $content,
    ];
});

$factory->state(\App\Models\Blog\Article::class, 'image', function (Faker $faker) {

    return [
        'image' => 'storage/articles/' . $faker->image(storage_path('app/public/articles'), 480, 640, 'people', false),

    ];
});