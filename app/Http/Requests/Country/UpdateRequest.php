<?php

namespace App\Http\Requests\Country;

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
            'name' => 'required|unique:countrys,name,'.$this->id,
            
            
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'The country name cannot be left blank !!!',
            'name.unique' => 'The country name already exists, please re-enter',
            
        ];
    }
}
