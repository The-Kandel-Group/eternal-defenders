<?php

namespace App\Http\Requests\System;

use Illuminate\Foundation\Http\FormRequest;

class VacancyRequest extends FormRequest
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
            'title' => 'required|max:255',
            'slug' => 'required|max:300|unique:vacancies,slug,' . $this->id,
            'sub_title' => 'nullable|string',
            'requirements' => 'nullable|string',
            'location' => 'nullable|string|max:255',
            'employment_type' => 'nullable|in:full-time,part-time,contract,internship,temporary',
            'salary_range' => 'nullable|string|max:255',
            'experience_level' => 'nullable|string|max:255',
            'vacancies_count' => 'nullable|integer|min:1',
            'posted_date' => 'nullable|date',
            'deadline' => 'nullable|date|after_or_equal:posted_date',
            'benefits' => 'nullable|string',
            'contact_email' => 'nullable|email|max:255',
            'contact_phone' => 'nullable|string|max:20',
            'application_link' => 'nullable|url|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'nullable|string',
            'short_description' => 'nullable|string|max:500',
            'status' => 'boolean',
            'position' => 'nullable|integer',
        ];
        return $validation;
    }
}
