<?php

use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(\App\Models\Blog\Article::class, function (Faker $faker) {
    return [
        'header' => $faker->sentence,
        'title' => $faker->sentence,
        'description' => $faker->sentences(3, true),
        'keywords' => implode(', ', $faker->words(20)),
        'content' => $faker->sentences(20, true),
        'image' => 'storage/articles/' . $faker->image(storage_path('app/public/articles'), 480, 640, 'people', false),
        'category_id' => null,
        'author_id' => null,
    ];
});
