<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class VisaRequest extends FormRequest
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
            'meta_name' => $this->facility->meta_name ?? $this->meta_name ?? $this->name ?? null,
            'meta_description' => $this->facility->meta_description ?? $this->meta_description ?? $this->excerpt ?? null,
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $id = $this->visa->id ?? '';

        return [
            'slug' => 'required|max:100|unique:visas,slug,'.$id,
            'name' => 'required|max:100|unique:visas,name,'.$id,
            'position' => 'sometimes|numeric',
            'active' => 'sometimes|boolean',
            'excerpt' => 'nullable|max:255',
            'description' => 'nullable|max:55000',
            'data' => 'nullable',
            'meta_name' => 'nullable|max:100',
            'meta_description' => 'nullable|max:255',
            'meta_keywords' => 'nullable|max:100',
        ];
    }
}
