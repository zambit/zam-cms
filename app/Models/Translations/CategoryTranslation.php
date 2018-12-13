<?php

namespace App\Models\Translations;

use Illuminate\Database\Eloquent\Model;

class CategoryTranslation extends Model
{
    public $timestamps = false;

    protected $fillable = ['*'];

    protected $table = 'blog_category_translations';
}
