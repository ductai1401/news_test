<?php

namespace App\Http\Requests\Medal;

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
            'posision' => 'required|numeric|unique:medals,position', 
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
