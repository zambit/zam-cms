<?php

namespace App\Http\Requests\Api\Article;

use Illuminate\Foundation\Http\FormRequest;

class IndexRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'category' => 'exists:blog_categories,id',
            'author' => 'exists:users,id',
        ];
    }
}
