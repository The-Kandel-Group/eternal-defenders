<?php

namespace App\Http\Requests\System;

use Illuminate\Foundation\Http\FormRequest;

class CoreValuesRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'icon' => 'required|image|max:2048',
            'description' => 'nullable|string',
            'status' => 'boolean',
        ];
    }
}
