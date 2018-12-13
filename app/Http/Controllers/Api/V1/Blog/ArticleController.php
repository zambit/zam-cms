<?php

namespace App\Http\Controllers\Api\V1\Blog;

use App\Http\Controllers\Controller;
use App\Http\Resources\Blog\ArticleResource;
use App\Models\Blog\Article;

class ArticleController extends Controller
{
    /**
     * GET api/v1/blog/articles
     *
     * Get blog articles.
     *
     * @group Blog
     */
    public function index()
    {
        $articles = Article::paginate(20);

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
