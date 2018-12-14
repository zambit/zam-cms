<?php

namespace Tests\Feature\Api;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Str;
use Tests\TestCase;

class BlogCategoriesTest extends TestCase
{
    use RefreshDatabase,
        PrepareDatabase;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testGetCategories()
    {
        $response = $this->get(route('api.blog.categories.index'));

        $response->assertStatus(200)
            ->assertJsonStructure([
                'data' => [
                    [
                        'id',
                        'name',
                        'description',
                    ],
                ]
            ]);
    }

    public function testGetCategoriesWithLang()
    {
        $response = $this->get(route('api.blog.categories.index', [
            'lang' => 'ru',
        ]));

        $response->assertStatus(200);

        $item = json_decode($response->getContent())->data[0];

        $this->assertTrue(Str::startsWith($item->name, 'RU:'));
        $this->assertTrue(Str::startsWith($item->description, 'RU:'));
    }
}
