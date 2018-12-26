<?php

namespace App\Models\Translations;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Translations\ArticleTranslation
 *
 * @property int $id
 * @property int $article_id
 * @property string $locale
 * @property string|null $header Наименование
 * @property string|null $title Заголовок
 * @property string|null $description Описание
 * @property string|null $keywords Ключевые слова
 * @property string|null $content Контент
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Translations\ArticleTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Translations\ArticleTranslation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Translations\ArticleTranslation query()
 * @mixin \Eloquent
 */
class ArticleTranslation extends Model
{
    public $timestamps = false;

    protected $fillable = ['*'];

    protected $table = 'blog_post_translations';
}
