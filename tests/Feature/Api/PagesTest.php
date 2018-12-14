<?php

namespace Tests\Feature\Api;

use App\Models\Page;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Str;
use Tests\TestCase;

class PagesTest extends TestCase
{
    use RefreshDatabase,
        PrepareDatabase;

    public function testGetPages()
    {
        $response = $this->get(route('api.pages.index'));

        $response->assertStatus(200)
            ->assertJsonStructure([
                'data' => [
                    $this->structure,
                ],
            ]);
    }

    public function testGetPagesWithLang()
    {
        $response = $this->get(route('api.pages.index', [
            'lang' => 'ru',
        ]));

        $item = json_decode($response->getContent())->data[0];

        $response->assertStatus(200);

        $this->assertTrue(Str::startsWith($item->title, 'RU:'));
        $this->assertTrue(Str::startsWith($item->keywords, 'RU:'));
        $this->assertTrue(Str::startsWith($item->description, 'RU:'));
    }

    public function testGetPagesWithFull()
    {
        $response = $this->get(route('api.pages.index', [
            'full' => 'true',
        ]));

        $item = json_decode($response->getContent())->data[0];

        $response->assertStatus(200);

        $this->assertTrue(strlen($item->content) >= 150);
    }

    public function testGetPage()
    {
        $response = $this->get(route('api.pages.show', Page::first()->id));

        $structure = $this->structure;
        $structure[] = 'content';

        $response->assertStatus(200)
            ->assertJsonStructure([
                'data' => $structure,
            ]);
    }

    public function testGetPageWithLang()
    {
        $response = $this->get(route('api.pages.show', [
            Page::first()->id,
            'lang' => 'ru',
        ]));

        $item = json_decode($response->getContent())->data;

        $response->assertStatus(200);

        $this->assertTrue(Str::startsWith($item->title, 'RU:'));
        $this->assertTrue(Str::startsWith($item->keywords, 'RU:'));
        $this->assertTrue(Str::startsWith($item->description, 'RU:'));
        $this->assertTrue(Str::startsWith($item->content, 'RU:'));
    }

    private $structure = [
        'id',
        'title',
        'keywords',
        'description',
        'created_at' => [
            'date',
            'timezone_type',
            'timezone',
        ],
    ];
}
