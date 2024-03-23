<?php

namespace App\Http\Requests\Olympic;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|unique:olympics,name,'.$this->id,
            'country' => 'required',
            'details' => 'required',
            'year' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'The olympic name cannot be left blank !!!',
            'name.unique' => 'The olympic name already exists, please re-enter',
            'year.required' => 'The year cannot be left blank !!!',
            'details.required' => 'The details cannot be left blank !!!',
            'country.required' => 'The hosting country cannot be left blank !!!',
            
        ];
    }
}
