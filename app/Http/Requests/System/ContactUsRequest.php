<?php

namespace App\Http\Requests\System;

use Illuminate\Foundation\Http\FormRequest;

class ContactUsRequest extends FormRequest
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
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'mobile_number' => [
                'required',
                'regex:/^9\d{9}$/', // Starts with 9 and exactly 9 digits follow
                'numeric',           // Only numeric values allowed
            ],            'email' => 'required|email|max:255',
            'message' => 'required|max:255',
        ];
        return $validation;
    }
}
