<?php

namespace App\Http\Requests\Sport;

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
            'name' => 'required|unique:sports,name',
            'image' => 'required|mimes:jbg,jpeg,bmp,png',
            'details' => 'required',
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'The sport name cannot be left blank !!!',
            'name.unique' => 'The sport name already exists, please re-enter',
            'image.required' => 'Sports photos cannot be blank !!!',
        
            'image.mimes' => 'Documents must be jbg,jpeg,bmp,pngb',
            'details.required' => 'The detailed content of the sport cannot be left blank !!!',
        ];
    }
}
