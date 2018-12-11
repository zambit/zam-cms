<?php

use App\Models\Language;
use Illuminate\Database\Seeder;

class LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->languages as $language) {
            Language::query()->create($language);
        }
    }

    protected $languages = [
        [
            'name' => 'English',
            'slug' => 'en',
            'flag' => 'en.png',
        ],
        [
            'name' => 'Русский',
            'slug' => 'ru',
            'flag' => 'ru.png',
        ],
        [
            'name' => 'Polish',
            'slug' => 'pl',
            'flag' => 'pl.png',
        ],
    ];
}
