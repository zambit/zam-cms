<?php

namespace App\Models\Translations;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Translations\LanguageTranslation
 *
 * @property int $id
 * @property int $language_id
 * @property string $locale
 * @property string|null $name Полное название языка
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Translations\LanguageTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Translations\LanguageTranslation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Translations\LanguageTranslation query()
 * @mixin \Eloquent
 */
class LanguageTranslation extends Model
{
    public $timestamps = false;

    protected $fillable = ['*'];
}
