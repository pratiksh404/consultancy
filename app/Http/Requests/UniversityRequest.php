<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class UniversityRequest extends FormRequest
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
            'slug' => ! is_null($this->name) ? Str::slug($this->name) : null,
            'meta_name' => $this->university->meta_name ?? $this->meta_name ?? $this->name ?? null,
            'meta_description' => $this->university->meta_description ?? $this->meta_description ?? $this->excerpt ?? null,
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $id = $this->university->id ?? '';

        return [
            'name' => 'required|max:120',
            'slug' => 'required|max:100|unique:universities,slug,'.$id,
            'url' => 'nullable|max:255',
            'excerpt' => 'nullable|max:5500',
            'description' => 'nullable|max:55000',
            'data' => 'nullable',
            'active' => 'sometimes|boolean',
            'position' => 'nullable|numeric',
            'country_id' => 'required|exists:countries,id',
            'meta_name' => 'nullable|max:120',
            'meta_description' => 'nullable|max:255',
            'meta_keywords' => 'nullable|max:255',
        ];
    }
}
