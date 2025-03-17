<?php

namespace App\Http\Requests\System;

use Illuminate\Foundation\Http\FormRequest;

class ServiceCategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $validation = [
            'title' => 'required|string|max:255',
            'sub_title' => 'nullable|string|max:255',
            'slug' => 'required|string|max:255|unique:service_categories,slug,' . $this->id,
            'description' => 'nullable|string',
            'secondary_description' => 'nullable|string',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'icon_fa' => 'nullable|string|max:255',
            'thumbnail_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'position' => 'nullable|integer',
            'status' => 'boolean',
        ];
        return $validation;
    }
}
