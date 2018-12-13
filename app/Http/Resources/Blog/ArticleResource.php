<?php

namespace App\Http\Resources\Blog;

use App\Models\Blog\Article;
use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        /** @var JsonResource|Article $this */

        $fullMode = $request->input('full') === 'true'
            || $request->route('article') !== null;

        return [
            'id' => $this->id,
            'header' => $this->header,
            'title' => $this->title,
            'keywords' => $this->keywords,
            'description' => $this->description,
            'content' => $this->getContent($this->content, $fullMode),
            'image' => $this->getImageUrl(),
            'category' => $this->category,
            'author' => $this->author,
            'tags' => $this->tags,
            'created_at' => $this->created_at,
        ];
    }

    private function getContent(string $content, bool $mode): string
    {
        return $mode
            ? $content
            : str_limit(strip_tags($content), 150);
    }
}
