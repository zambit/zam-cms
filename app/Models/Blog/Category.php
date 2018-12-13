<?php

namespace App\Models\Blog;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Blog\Category
 *
 * @property int $id
 * @property string $name Название категории
 * @property string $description Описание категории
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Translations\CategoryTranslation[] $translations
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Blog\Category listsTranslations($translationField)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Blog\Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Blog\Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Blog\Category notTranslatedIn($locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Blog\Category orWhereTranslation($key, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Blog\Category orWhereTranslationLike($key, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Blog\Category orderByTranslation($key, $sortmethod = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Blog\Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Blog\Category translated()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Blog\Category translatedIn($locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Blog\Category whereTranslation($key, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Blog\Category whereTranslationLike($key, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Blog\Category withTranslation()
 * @mixin \Eloquent
 */
class Category extends Model
{
    use Translatable;

    protected $table = 'blog_categories';

    protected $visible = [
        'id',
        'name',
    ];

    public $translatedAttributes = [
        'name',
        'description',
    ];
}
