<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|min:3|max:255',
            'subject' => 'required|string|min:3|max:255',
            'phone' => 'required|string|min:3|max:255',
            'email' => 'required|email|min:3|max:255',
            'message' => 'required|string|min:3|max:500',
        ];
    }
}
