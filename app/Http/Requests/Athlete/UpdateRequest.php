<?php

namespace App\Http\Requests\Athlete;

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
            'name' => 'required|unique:athletes,name,'.$this->id,
            'brith_day' => 'required',
            'id_country' => 'required',
            'id_sport' => 'required',
            'description' => 'required'
    

        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'The athlete name cannot be left blank !!!',
            'name.unique' => 'The athlete name already exists, please re-enter',
            'brith_day.required' =>'The brith day cannot be left blank !!!',
            'id_sport.required' => 'The sport cannot be blank !!!',
            'description.required' => 'The description cannot be blank !!!',
            'id_country.required' => 'The country cannot be blank !!!'
        ];
    } 
}
