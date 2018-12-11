<?php

namespace App\Http\Controllers\Api\V1\Blog;

use App\Http\Controllers\Controller;
use App\Http\Resources\Blog\TagResource;
use App\Models\Blog\Tag;

class TagController extends Controller
{
    /**
     * GET api/v1/blog/tags
     *
     * Get all available blog tags.
     *
     * @group Blog
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $tags = Tag::all();

        return TagResource::collection($tags);
    }
}
