<?php

namespace App\Models\Translations;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Translations\PageTranslation
 *
 * @property int $id
 * @property int $page_id
 * @property string $locale
 * @property string|null $title Заголовок
 * @property string|null $description Описание
 * @property string|null $keywords Ключевые слова
 * @property mixed|null $content Контент
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Translations\PageTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Translations\PageTranslation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Translations\PageTranslation query()
 * @mixin \Eloquent
 */
class PageTranslation extends Model
{
    public $timestamps = false;

    protected $fillable = ['*'];
}
