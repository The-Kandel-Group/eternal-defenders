<?php

namespace App\Http\Requests\System;

use Illuminate\Foundation\Http\FormRequest;

class VacancyApplicationRequest extends FormRequest
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
            'vacancy_id' => 'required|exists:vacancies,id',
            'full_name' => 'required|string|max:255',
            'first_name' => 'nullable|string|max:255',
            'last_name' => 'nullable|string|max:255',
            'email' => 'required|email|max:255',
            'description' => 'nullable|max:2550',
            'phone_number' => 'required|string|max:15',
            'resume' => 'required|file|mimes:pdf,doc,docx|max:20480',
            'cover_letter' => 'nullable|string',
            'application_status' => 'required|in:pending,shortlisted,rejected,hired',
        ];
        return $validation;
    }
}
