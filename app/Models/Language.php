<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Language
 *
 * @property int $id
 * @property string $name Полное название языка
 * @property string $slug Двухбуквенный код ISO 639-1 (1998)
 * @property string $flag Картинка обозначения языка (флаг)
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Language newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Language newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Language query()
 * @mixin \Eloquent
 */
class Language extends Model
{
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
        return sprintf('%s/storage/languages/%s', config('app.url'), $this->flag);
    }
}
