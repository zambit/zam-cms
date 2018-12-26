<?php

namespace App\Models\Blog;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Blog\Tag
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Translations\TagTranslation[] $translations
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Blog\Tag listsTranslations($translationField)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Blog\Tag newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Blog\Tag newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Blog\Tag notTranslatedIn($locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Blog\Tag orWhereTranslation($key, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Blog\Tag orWhereTranslationLike($key, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Blog\Tag orderByTranslation($key, $sortmethod = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Blog\Tag query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Blog\Tag translated()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Blog\Tag translatedIn($locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Blog\Tag whereTranslation($key, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Blog\Tag whereTranslationLike($key, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Blog\Tag withTranslation()
 * @mixin \Eloquent
 */
class Tag extends Model
{
    use Translatable;

    protected $table = 'blog_tags';

    public $translatedAttributes = [
        'name',
    ];

    protected $visible = [
        'id',
        'name',
    ];
}
