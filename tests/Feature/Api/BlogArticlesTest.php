<?php

namespace Tests\Feature\Api;

use App\Models\Blog\Article;
use App\Models\Blog\Category;
use App\Models\Blog\Tag;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Str;
use Tests\TestCase;

class BlogArticlesTest extends TestCase
{
    use RefreshDatabase,
        PrepareDatabase;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testGetArticle()
    {
        $response = $this->get(route('api.blog.articles.show', Article::first()->id));

        $response->assertStatus(200)
            ->assertJsonStructure([
                'data' => $this->structure,
            ]);
    }

    public function testGetArticleWithLang()
    {
        $response = $this->get(route('api.blog.articles.show', [
            Article::first()->id,
            'lang' => 'ru',
        ]));

        $item = json_decode($response->getContent())->data;

        $this->assertTrue(Str::startsWith($item->header, 'RU:'));
        $this->assertTrue(Str::startsWith($item->title, 'RU:'));
        $this->assertTrue(Str::startsWith($item->keywords, 'RU:'));
        $this->assertTrue(Str::startsWith($item->description, 'RU:'));
        $this->assertTrue(Str::startsWith($item->content, 'RU:'));
        $this->assertTrue(Str::startsWith($item->category->name, 'RU:'));
        $this->assertTrue(Str::startsWith($item->tags[0]->name, 'RU:'));

        $response->assertStatus(200);
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testGetArticles()
    {
        $response = $this->get(route('api.blog.articles.index'));

        $item = json_decode($response->getContent())->data[0];

        $response->assertStatus(200)
            ->assertJsonCount(20, 'data')
            ->assertJsonStructure([
                'data' => [
                    $this->structure,
                ],
            ]);

        $this->assertTrue(strlen($item->content) <= 153);
    }

    public function testGetArticlesWithLimit()
    {
        $response = $this->get(route('api.blog.articles.index', [
            'limit' => '2',
        ]));

        $response->assertStatus(200)
            ->assertJsonCount(2, 'data');
    }

    public function testGetArticlesWithFull()
    {
        $response = $this->get(route('api.blog.articles.index', [
            'full' => 'true',
        ]));

        $item = json_decode($response->getContent())->data[0];

        $response->assertStatus(200);

        $this->assertTrue(strlen($item->content) >= 150);
    }

    public function testGetArticlesWithCategory()
    {
        $categoryId = Category::first()->id;

        $response = $this->get(route('api.blog.articles.index', [
            'category' => $categoryId,
        ]));

        $items = json_decode($response->getContent())->data;

        $response->assertStatus(200);

        foreach ($items as $item) {
            $this->assertEquals($item->category->id, $categoryId);
        }
    }

    public function testGetArticlesWithAuthor()
    {
        $authorId = User::first()->id;

        $response = $this->get(route('api.blog.articles.index', [
            'author' => $authorId,
        ]));

        $items = json_decode($response->getContent())->data;

        $response->assertStatus(200);

        foreach ($items as $item) {
            $this->assertEquals($item->author->id, $authorId);
        }
    }

    public function testGetArticlesWithTags()
    {
        $firstTagId = Tag::first()->id;

        $response = $this->get(route('api.blog.articles.index', [
            'tags' => sprintf('%s,%s', $firstTagId, $firstTagId + 1),
        ]));

        $items = json_decode($response->getContent())->data;

        $response->assertStatus(200);

        foreach ($items as $item) {
            $ids = collect($item->tags)->pluck('id')->toArray();

            $this->assertTrue(in_array($firstTagId, $ids) || in_array($firstTagId + 1, $ids));
        }
    }

    public function testGetArticlesWithLang()
    {
        $response = $this->get(route('api.blog.articles.index', [
            'lang' => 'ru',
        ]));

        $item = json_decode($response->getContent())->data[0];

        $this->assertTrue(Str::startsWith($item->header, 'RU:'));
        $this->assertTrue(Str::startsWith($item->title, 'RU:'));
        $this->assertTrue(Str::startsWith($item->keywords, 'RU:'));
        $this->assertTrue(Str::startsWith($item->description, 'RU:'));
        $this->assertTrue(Str::startsWith($item->description, 'RU:'));
        $this->assertTrue(Str::startsWith($item->content, 'RU:'));
        $this->assertTrue(Str::startsWith($item->category->name, 'RU:'));
        $this->assertTrue(Str::startsWith($item->tags[0]->name, 'RU:'));

        $response->assertStatus(200);
    }

    private $structure = [
        'id',
        'header',
        'title',
        'keywords',
        'description',
        'content',
        'image',
        'category' => [
            'id',
            'name',
        ],
        'author' => [
            'id',
            'name',
        ],
        'tags' => [
            [
                'id',
                'name',
            ],
        ],
        'created_at' => [
            'date',
            'timezone_type',
            'timezone',
        ],
        'published_at' => [
            'date',
            'timezone_type',
            'timezone',
        ],
    ];
}
