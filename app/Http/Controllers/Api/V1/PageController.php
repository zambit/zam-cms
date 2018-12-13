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
     * @group Page
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
     * @group Page
     */
    public function show(Page $page)
    {
        return new PageResource($page);
    }
}
