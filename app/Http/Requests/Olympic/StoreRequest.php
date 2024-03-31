<?php

namespace App\Http\Requests\Olympic;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => 'required|unique:olympics,name',
            'country' => 'required',
            'logo' => 'required|mimes:jbg,jpeg,bmp,png,avif',
            'details' => 'required',
            'year' => 'required|digits:4|integer|min:1900',
            'mascot' => 'required|mimes:jbg,jpeg,bmp,png',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'The olympic name cannot be left blank !!!',
            'name.unique' => 'The olympic name already exists, please re-enter',
            'logo.required' => 'Logo photos cannot be blank !!!',
            'logo.mimes' => 'Documents must be jbg,jpeg,bmp,png',
            'mascot.required' => 'Mascot photos cannot be blank !!!',
            'mascot.mimes' => 'Documents must be jbg,jpeg,bmp,png',
            'year.required' => 'The year cannot be left blank !!!',
            'year.integer' => 'The year of organization must be numeric!!!',
            'year.min' => 'The year the organization must not exist !!!',
            'year.digits' => 'The year the organization must not exist !!!',
            'details.required' => 'The details cannot be left blank !!!',
            'country.required' => 'The hosting country cannot be left blank !!!',

        ];
    }
}
