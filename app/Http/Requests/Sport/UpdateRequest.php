<?php

namespace App\Http\Requests\Sport;

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
            'name' => 'required|unique:sports,name,'.$this->id,
            'details' => 'required'
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'The sport name cannot be left blank!!!',
            'name.unique' => 'The sport name already exists, please re-enter',
            'details.required' => 'The detailed content of the sport cannot be left blank !!!',
        ];
    }
}
