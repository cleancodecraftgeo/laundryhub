<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Carbon;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->resource->id,
            'title' => $this->resource->title,
            'description' => $this->resource->description,
            'image' => $this->resource->image,
            'date' =>[
               'human' => Carbon::parse($this->resource->created_at)->diffForHumans(),
                // getHumanDiffOptions(),
               'iso'   => Carbon::parse($this->resource->created_at)->toIso8601String()
            ]
        ];
    }
}
