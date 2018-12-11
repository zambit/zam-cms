<?php

namespace App\Http\Resources;

use App\Models\Language;
use Illuminate\Http\Resources\Json\JsonResource;

class LanguageResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        /** @var JsonResource|Language $this */

        return [
            'name' => $this->name,
            'slug' => $this->slug,
            'flag' => $this->getFlagUrl(),
        ];
    }
}
