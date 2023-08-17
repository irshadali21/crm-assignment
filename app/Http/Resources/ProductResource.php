<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

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
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
            'discount_percentage' => $this->discount_percentage,
            'rating' => $this->rating,
            'stock' => $this->stock,
            'brand' => $this->brand,
            'category' => $this->category->name,
            'thumbnail' => $this->thumbnail,
            'images' => json_decode($this->images),
        ];
    }
}
