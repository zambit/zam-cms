<?php

namespace App\Http\Controllers\Api\V1\Blog;

use App\Http\Controllers\Controller;
use App\Http\Resources\Blog\CategoryResource;
use App\Models\Blog\Category;

class CategoryController extends Controller
{
    /**
     * GET api/v1/blog/categories
     *
     * Get all available blog categories.
     *
     * @queryParam lang Current language. English default.
     * @group Blog
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $categories = Category::all();

        return CategoryResource::collection($categories);
    }
}
