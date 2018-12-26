<?php

namespace App\Models\Translations;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Translations\CategoryTranslation
 *
 * @property int $id
 * @property int $category_id
 * @property string $locale
 * @property string|null $name Название категории
 * @property string|null $description Описание категории
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Translations\CategoryTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Translations\CategoryTranslation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Translations\CategoryTranslation query()
 * @mixin \Eloquent
 */
class CategoryTranslation extends Model
{
    public $timestamps = false;

    protected $fillable = ['*'];

    protected $table = 'blog_category_translations';
}
