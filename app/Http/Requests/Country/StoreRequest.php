<?php

namespace App\Http\Requests\Country;

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
            'name' => 'required|unique:countrys,name',
            'flag' => 'required|mimes:jbg,jpeg,bmp,png',
            
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'The country name cannot be left blank !!!',
            'name.unique' => 'The country name already exists, please re-enter',
            'flag.required' => 'flag photos cannot be blank !!!',
            'flag.mimes' => 'Documents must be jbg,jpeg,bmp,png',
            
        ];
    }
}
