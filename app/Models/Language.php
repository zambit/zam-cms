<?php

namespace App\Models;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Language
 *
 * @property int $id
 * @property string $slug Двухбуквенный код ISO 639-1 (1998)
 * @property string $flag Картинка обозначения языка (флаг)
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Translations\LanguageTranslation[] $translations
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Language listsTranslations($translationField)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Language newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Language newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Language notTranslatedIn($locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Language orWhereTranslation($key, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Language orWhereTranslationLike($key, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Language orderByTranslation($key, $sortmethod = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Language query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Language translated()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Language translatedIn($locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Language whereTranslation($key, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Language whereTranslationLike($key, $value, $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Language withTranslation()
 * @mixin \Eloquent
 */
class Language extends Model
{
    use Translatable;

    public $translatedAttributes = [
        'name',
    ];

    protected $fillable = [
        'name',
        'slug',
        'flag',
    ];

    /**
     * УРЛ флага для языка
     *
     * @return string
     */
    public function getFlagUrl(): string
    {
        return sprintf('%s/%s', config('app.url'), $this->flag);
    }
}
