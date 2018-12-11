<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\LanguageResource;
use App\Models\Language;

class LanguageController extends Controller
{
    /**
     * GET api/v1/languages
     *
     * Get all available site languages.
     *
     * @group Language
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $languages = Language::all();

        return LanguageResource::collection($languages);
    }
}
