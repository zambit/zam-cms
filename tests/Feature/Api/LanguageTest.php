<?php

namespace Tests\Feature\Api;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LanguageTest extends TestCase
{
    use RefreshDatabase,
        PrepareDatabase;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testGetLanguages()
    {
        $response = $this->get(route('api.languages.index'));

        $response->assertStatus(200)
            ->assertJsonStructure([
                'data' => [
                    [
                        'name',
                        'slug',
                        'flag',
                    ],
                ]
            ]);
    }
}
