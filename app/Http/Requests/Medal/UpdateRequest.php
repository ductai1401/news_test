<?php

namespace App\Http\Requests\Medal;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'posision' => 'required|numeric|unique:medals,position,'.$this->id, 
        ];
    }

    public function messages()
    {
        return [
            'posision.required' => 'Rankings cannot be empty !!!',
            'posision.numeric' => 'Rankings must be numeric !!!',
            'posision.unique' => 'This rank is already in use, please re-enter another position',
            

        ];
    }
}
