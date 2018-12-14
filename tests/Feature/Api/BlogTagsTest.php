<?php

namespace Tests\Feature\Api;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Str;
use Tests\TestCase;

class BlogTagsTest extends TestCase
{
    use RefreshDatabase,
        PrepareDatabase;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testGetTags()
    {
        $response = $this->get(route('api.blog.tags.index'));

        $response->assertStatus(200)
            ->assertJsonStructure([
                'data' => [
                    [
                        'id',
                        'name',
                    ],
                ]
            ]);;
    }

    public function testGetTagsWithLang()
    {
        $response = $this->get(route('api.blog.tags.index', [
            'lang' => 'ru',
        ]));

        $response->assertStatus(200);

        $item = json_decode($response->getContent())->data[0];

        $this->assertTrue(Str::startsWith($item->name, 'RU:'));
    }
}
