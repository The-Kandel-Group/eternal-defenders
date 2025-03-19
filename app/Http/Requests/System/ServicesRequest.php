<?php

namespace App\Http\Requests\System;

use Illuminate\Foundation\Http\FormRequest;

class ServicesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     */
    public function rules(): array
    {
        return [
            'service_category_id' => 'required|exists:service_categories,id',
            'title'       => 'required|string|max:255',
            'sub_title'   => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
            'icon_fa'     => 'nullable|string|max:255',
            'position'    => 'nullable|integer',
            'status'      => 'required|boolean',
        ];
    }
}
