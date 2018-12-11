<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Blog\Article
 *
 * @property int $id
 * @property string $header Наименование
 * @property string $title Заголовок
 * @property string $description Описание
 * @property string $keywords Ключевые слова
 * @property string $image Главная картинка
 * @property int $category_id Категория
 * @property string $content Контент
 * @property int $author_id Автор
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Blog\Tag[] $tags
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Blog\Article newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Blog\Article newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Blog\Article query()
 * @mixin \Eloquent
 */
class Article extends Model
{
    protected $table = 'blog_posts';

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'blog_post_tag', 'post_id', 'tag_id');
    }
}
