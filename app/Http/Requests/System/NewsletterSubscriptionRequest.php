<?php

namespace App\Http\Requests\System;

use Illuminate\Foundation\Http\FormRequest;

class NewsletterSubscriptionRequest extends FormRequest
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
            'title' => 'nullable|string|max:255',
            'email' => 'required|email|unique:newsletter_subscriptions,email,'.$this->id,
            'status' => 'sometimes|boolean',
        ];
        return $validation;
    }
}
