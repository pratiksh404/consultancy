<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CandidateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Prepare the data for validation.
     */
    protected function prepareForValidation(): void
    {
        $this->merge([
            'code' => $this->candidate->code ?? $this->code ?? rand(100000, 999999),
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'code' => 'required',
            'name' => 'required|max:80',
            'email' => 'required|email|max:60',
            'phone' => 'nullable',
            'address' => 'nullable|max:100',
            'data' => 'nullable',
            'type' => 'nullable|numeric',
            'verified' => 'sometimes|boolean',
            'country_id' => 'nullable|exists:countries,id',
            'course_id' => 'nullable|exists:courses,id',
            'visa_id' => 'nullable|exists:visas,id',
        ];
    }
}
