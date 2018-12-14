<?php
/**
 * Created by PhpStorm.
 * User: dsandal
 * Date: 14.12.18
 * Time: 17:12
 */

namespace Tests\Feature\Api;


use App\Models\Blog\Article;
use App\Models\Blog\Category;
use App\Models\Blog\Tag;
use App\Models\Page;
use App\Models\User;

trait PrepareDatabase
{
    protected $categories;

    protected $tags;

    protected $users;

    protected function setUp()
    {
        parent::setUp();

        $this->languages()
            ->pages()
            ->categories()
            ->tags()
            ->articles();
    }

    private function languages()
    {
        \Artisan::call('db:seed', [
            '--class' => 'LanguagesTableSeeder',
        ]);

        return $this;
    }

    private function pages()
    {
        factory(Page::class, 2)->create();

        return $this;
    }

    private function categories()
    {
        $this->categories = factory(Category::class, 2)->create();

        return $this;
    }

    private function tags()
    {
        $this->tags = factory(Tag::class, 6)->create();

        return $this;
    }

    private function articles()
    {
        $this->users = factory(User::class, 2)->create();

        $categories = $this->categories;
        $tags = $this->tags;
        $users = $this->users;

        factory(Article::class, 30)
            ->make()
            ->each(function (Article $a) use ($categories, $tags, $users) {
                $a->category_id = $categories->random()->id;
                $a->author_id = $users->random()->id;
                $a->save();

                $a->tags()->attach($tags->random(3)->pluck('id')->toArray());
            });

        return $this;
    }
}