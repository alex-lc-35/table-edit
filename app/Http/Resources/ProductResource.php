<?php

namespace App\Http\Resources;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Product */
class ProductResource extends JsonResource
{
    public function toArray(Request $request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'price' => $this->price,
            'unit' => $this->unit,
            'inter' => $this->inter,
            'is_displayed' => $this->is_displayed,
            'has_stock' => $this->has_stock,
            'stock' => $this->stock,
            'limited' => $this->limited,
            'discount' => $this->discount,
            'discount_text' => $this->discount_text,
            'image' => $this->image,
            'is_deleted' => $this->is_deleted,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,

            'user_id' => $this->user_id,
        ];
    }
}
