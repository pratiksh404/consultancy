<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class TeamRequest extends FormRequest
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
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $id = $this->team->id ?? '';

        return [
            'name' => 'required|max:120',
            'slug' => 'required|max:100|unique:teams,slug,'.$id,
            'designation' => 'required|max:100',
            'email' => 'required|email:rfc,dns|max:100|unique:teams,email,'.$id,
            'phone' => 'required|numeric|min:9000000000|max:9999999999',
            'position' => 'nullable|numeric',
            'active' => 'nullable|boolean',
            'data' => 'nullable',
            'message' => 'nullable',
        ];
    }
}
