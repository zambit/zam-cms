<?php

namespace App\Http\Resources\Blog;

use App\Models\Blog\Tag;
use Illuminate\Http\Resources\Json\JsonResource;

class TagResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        /** @var JsonResource|Tag $this */

        return [
            'id' => $this->id,
            'name' => $this->name,
        ];
    }
}
