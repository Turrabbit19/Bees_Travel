<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePlaceRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255|unique:places,name,' . $this->place->id,
            'image' => 'nullable|image|max:5012',
            'description' => 'nullable|string',
            'is_active' => 'required|boolean'
        ];
    }
}