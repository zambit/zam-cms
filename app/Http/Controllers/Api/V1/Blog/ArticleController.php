<?php

namespace App\Http\Controllers\Api\V1\Blog;

use App\Http\Controllers\Controller;
use App\Http\Resources\Blog\ArticleResource;
use App\Models\Blog\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * GET api/v1/blog/articles
     *
     * Get blog articles.
     *
     * @group Blog
     */
    public function index(Request $request)
    {
        $limit = $request->input('limit', 20);

        $builder = Article::query();

        if ($categoryId = $request->input('category')) {
            $builder->where('category_id', '=', $categoryId);
        }

        if ($authorId = $request->input('author')) {
            $builder->where('author_id', '=', $authorId);
        }

        $articles = $builder->paginate($limit);

        return ArticleResource::collection($articles);
    }

    /**
     * GET api/v1/blog/articles/{article}
     *
     * Get blog article by id
     *
     * @group Blog
     */
    public function show(Article $article)
    {
        return new ArticleResource($article);
    }
}
