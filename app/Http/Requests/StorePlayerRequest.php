<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePlayerRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'team_id' => 'nullable|integer|exists:teams,id',
            'category_id' => 'nullable|integer|exists:categories,id',
            'date_of_birth' => 'required|date',
            'height' => 'required|numeric',
            'weight' => 'required|numeric',
            'position' => 'nullable|string|max:255',
            'skills' => 'nullable|string|max:255',
            'school' => 'required|string|max:255',
            'health_insurance' => 'required|string|max:255',
            'injury_history' => 'nullable|string|max:255',
            'medical_history' => 'required|string|max:255',
            'status' => 'required|string|max:255',

        ];
    }
}
