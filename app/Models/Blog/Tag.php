<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Blog\Tag
 *
 * @property int $id
 * @property string $name Название тега
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Blog\Tag newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Blog\Tag newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Blog\Tag query()
 * @mixin \Eloquent
 */
class Tag extends Model
{
    protected $table = 'blog_tags';
}
