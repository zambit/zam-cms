<?php

namespace App\Http\Controllers\Api\V1\Blog;

use App\Http\Controllers\Controller;
use App\Http\Resources\Blog\CategoryResource;
use App\Models\Blog\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return CategoryResource::collection($categories);
    }
}
