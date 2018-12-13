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
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Blog\Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Blog\Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Blog\Category query()
 * @mixin \Eloquent
 */
class Category extends Model
{
    use Translatable;

    protected $table = 'blog_categories';

    public $translatedAttributes = [
        //
    ];
}
