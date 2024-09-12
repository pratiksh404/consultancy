<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestRequest extends FormRequest
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
            'code' => ! is_null($this->test) ? $this->test->code : rand(100000, 999999),
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
            'code' => 'required|max:100|unique:tests,code',
            'course_id' => 'required|exists:courses,id',
            'test_date' => 'required|date',
            'is_published' => 'sometimes|boolean',
            'limit' => 'sometimes|numeric',
            'data' => 'nullable',
        ];
    }
}
