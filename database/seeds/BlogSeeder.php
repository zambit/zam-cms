<?php

use App\Models\Blog\Article;
use App\Models\Blog\Category;
use App\Models\Blog\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;


class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** @var Category[]|\Illuminate\Database\Eloquent\Collection $categories */
        $categories = factory(Category::class, 5)->create();

        /** @var Tag[]|\Illuminate\Database\Eloquent\Collection $tags */
        $tags = factory(Tag::class, 20)->create();

        $users = User::all();

        factory(Article::class, 40)->states('image')
            ->make()
            ->each(function (Article $a) use ($categories, $tags, $users) {
                $a->category_id = $categories->random()->id;
                $a->author_id = $users->random()->id;
                $a->save();

                $a->tags()->attach($tags->random(3)->pluck('id')->toArray());
            });
    }
}
