<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTraineeRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'category' => 'required|string',
            'name' => 'required|string|max:255',
            'parent' => 'required|string|max:255',
            'parent_phone' => 'required|string|max:16',
            'next_of_kin_name' => 'required|string|max:255',
            'next_of_kin_phone' => 'required|string|max:16',
            'next_of_kin_relationship' => 'required|string|max:255',
            'date_of_birth' => 'required|string',
            'health_insurance' => 'required|string|max:255',
            'medical_history' => 'required',
        ];
    }
}
