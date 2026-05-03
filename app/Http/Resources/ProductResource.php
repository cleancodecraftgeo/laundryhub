<?php

namespace App\Http\Resources;

use App\Http\Resources\ImageResource;
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

    'name' => $this->name,
    'description' => $this->resource->description,
    'price' => $this->resource->price,
    'image' => $this->resource->thumbnail,
    'images' => ImageResource::collection($this->whenLoaded('images')),
    'category' => [
        'id' => $this->category?->id,
        'name' => app()->getLocale() === 'ge'
        ? $this->category?->name_ge
        : $this->category?->name_en,

    'breadcrumb' => $this->category?->breadcrumb,
],
    'date' => [
        'human' => Carbon::parse($this->resource->created_at)->diffForHumans(),
        'iso' => Carbon::parse($this->resource->created_at)->toIso8601String()
    ],
];
    }
}
