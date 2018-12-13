<?php

namespace App\Models\Translations;

use Illuminate\Database\Eloquent\Model;

class TagTranslation extends Model
{
    public $timestamps = false;

    protected $fillable = ['*'];

    protected $table = 'blog_tag_translations';
}
