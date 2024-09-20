<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTourRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Thay đổi thành logic xác thực phù hợp nếu cần
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'img_thumb' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'description' => 'nullable|string',
            'place_id' => 'required|exists:places,id',
            'is_active' => 'required|boolean',
            'sku' => 'required|string|max:255|unique:tours,sku,' . $this->route('tour')->id,
            'extra_features.*.name' => 'nullable|string|max:255',
            'extra_features.*.price' => 'nullable|numeric|min:0',
        ];
    }
}