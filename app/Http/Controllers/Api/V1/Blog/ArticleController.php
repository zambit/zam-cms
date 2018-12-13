<?php

namespace App\Http\Controllers\Api\V1\Blog;

use App\Http\Controllers\Controller;
use App\Http\Resources\Blog\ArticleResource;
use App\Models\Blog\Article;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * GET api/v1/blog/articles
     *
     * Get blog articles.
     *
     * @group Blog
     * @queryParam lang Current language. English default.
     * @queryParam full If `true` show full content.
     * @queryParam limit How many items show on a page (default 20).
     * @queryParam category Filter by a category ID.
     * @queryParam author Filter by an author ID.
     * @queryParam tags Filter by an tag ID. You can list several, separated by commas.
     * @param Request $request
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index(Request $request)
    {
        $limit = $request->input('limit', 20);

        $builder = Article::with('tags', 'author', 'category');

        if ($categoryId = $request->input('category')) {
            $builder->where('category_id', '=', $categoryId);
        }

        if ($authorId = $request->input('author')) {
            $builder->where('author_id', '=', $authorId);
        }

        if ($tagIds = $request->input('tags')) {
            $tagIds = str_replace(' ', '', $tagIds);

            $tags = explode(',', $tagIds);

            $builder->whereHas('tags', function (Builder $query) use ($tags) {
                $query->whereIn('blog_tags.id', $tags);
            });
        }

        $articles = $builder->paginate($limit);

        return ArticleResource::collection($articles);
    }

    /**
     * GET api/v1/blog/articles/{article}
     *
     * Get blog article by id
     *
     * @queryParam lang Current language. English default.
     * @group Blog
     * @param Article $article
     * @return ArticleResource
     */
    public function show(Article $article)
    {
        return new ArticleResource($article);
    }
}
