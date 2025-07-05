<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    public function rules()
    {
        return [
            'user_id' => ['required', 'exists:users'],
            'name' => ['required'],
            'price' => ['required', 'integer'],
            'unit' => ['required'],
            'inter' => ['nullable', 'numeric'],
            'is_displayed' => ['boolean'],
            'has_stock' => ['boolean'],
            'stock' => ['nullable', 'integer'],
            'limited' => ['boolean'],
            'discount' => ['boolean'],
            'discount_text' => ['nullable'],
            'image' => ['required'],
            'is_deleted' => ['boolean'],
        ];
    }

    public function authorize()
    {
        return true;
    }
}
