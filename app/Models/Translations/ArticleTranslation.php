<?php

namespace App\Models\Translations;

use Illuminate\Database\Eloquent\Model;

class ArticleTranslation extends Model
{
    public $timestamps = false;

    protected $fillable = ['*'];

    protected $table = 'blog_post_translations';
}
