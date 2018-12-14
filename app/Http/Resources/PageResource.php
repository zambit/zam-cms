<?php

namespace App\Http\Resources;

use App\Models\Page;
use Illuminate\Http\Resources\Json\JsonResource;

class PageResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        /** @var JsonResource|Page $this */

        $fullMode = $request->input('full') === 'true'
            || $request->route('page') !== null;

        return [
            'id' => $this->id,
            'title' => $this->title,
            'keywords' => $this->keywords,
            'description' => $this->description,
            'content' => $this->when($fullMode, json_decode($this->content)),
            'created_at' => $this->created_at,
        ];
    }
}
