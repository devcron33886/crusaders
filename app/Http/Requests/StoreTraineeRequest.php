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
            'category' => 'required',
            'name' => 'required|string|max:255',
            'father_name' => 'required|string|max:255',
            'mother_name' => 'required|string|max:255',
            'father_phone' => 'required|string|max:15',
            'mother_phone' => 'required|string|max:15',
            'father_email' => 'required|string|max:255',
            'mother_email' => 'required|string|max:255',
            'next_of_kin_name' => 'required|string|max:255',
            'next_of_kin_phone' => 'required|string|max:15',
            'next_of_kin_relationship' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'height' => 'required|integer',
            'weight' => 'required|integer',
            'school' => 'required|string|max:255',
            'health_insurance' => 'required|string|max:255',
            'medical_history' => 'required',
            'payment_method' => 'required',
            'amount_paid' => 'required',
            'status' => 'required',
            'payment_status' => 'required',
        ];
    }
}
