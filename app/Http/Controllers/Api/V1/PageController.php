<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\PageResource;
use App\Models\Page;

class PageController extends Controller
{
    /**
     * GET api/v1/pages
     *
     * Get all available site pages.
     *
     * @queryParam lang Current language. English default.
     * @group Page
     * @queryParam full If `true` show full content.
     */
    public function index()
    {
        $pages = Page::all();

        return PageResource::collection($pages);
    }

    /**
     * GET api/v1/pages/{page}
     *
     * Get page by id
     *
     * @queryParam lang Current language. English default.
     * @group Page
     * @param Page $page
     * @return PageResource
     */
    public function show(Page $page)
    {
        return new PageResource($page);
    }
}
