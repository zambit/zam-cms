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

        $langs = Language::all()->pluck('slug')->toArray();

        config([
            'translatable.locales' => $langs,
        ]);
    }

    protected $languages = [
        [
            'name:en' => 'English',
            'name:ru' => 'Английский',
            'name:pl' => 'Angielski',
            'slug' => 'en',
            'flag' => 'storage/languages/demo_en.png',
        ],
        [
            'name:en' => 'Russian',
            'name:ru' => 'Русский',
            'name:pl' => 'Rosyjski',
            'slug' => 'ru',
            'flag' => 'storage/languages/demo_ru.png',
        ],
        [
            'name:en' => 'Polish',
            'name:ru' => 'Польский',
            'name:pl' => 'Polski',
            'slug' => 'pl',
            'flag' => 'storage/languages/demo_pl.png',
        ],
    ];
}
