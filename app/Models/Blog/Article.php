<?php

namespace App\Models\Blog;

use App\Models\User;
use Dimsav\Translatable\Translatable;
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
 * @property-read \App\Models\User $author
 * @property-read \App\Models\Blog\Category $category
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Blog\Tag[] $tags
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Translations\ArticleTranslation[] $translations
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Blog\Article listsTranslations($translationField)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Blog\Article newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Blog\Article newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Blog\Article notTranslatedIn($locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Blog\Article orWhereTranslation($key, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Blog\Article orWhereTranslationLike($key, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Blog\Article orderByTranslation($key, $sortmethod = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Blog\Article query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Blog\Article translated()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Blog\Article translatedIn($locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Blog\Article whereTranslation($key, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Blog\Article whereTranslationLike($key, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Blog\Article withTranslation()
 * @mixin \Eloquent
 */
class Article extends Model
{
    use Translatable;

    protected $table = 'blog_posts';

    public $translatedAttributes = [
        //
    ];

    /**
     * Теги статьи блога
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'blog_post_tag', 'post_id', 'tag_id');
    }

    /**
     * Автор статьи блога
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    /**
     * Категория статьи блога
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    /**
     * УРЛ изображения статьи блога
     *
     * @return string
     */
    public function getImageUrl(): string
    {
        return sprintf('%s/%s', config('app.url'), $this->image);
    }
}
