<?php

namespace App\Http\Requests\Athlete;

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
            'name' => 'required|unique:athletes,name',
            'brith_day' => 'required',
            'id_country' => 'required',
            'description' => 'required',

            
            'id_sport' => 'required',

            'image' => 'required|mimes:jbg,jpeg,bmp,png',
            

        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'The athlete name cannot be left blank !!!',
            'name.unique' => 'The athlete name already exists, please re-enter',
            'brith_day.required' =>'The brith day cannott be left blank !!!',
            'image.required' => 'Image photos cannot be blank !!!',
            'description.required' => 'The description cannot be blank !!!',
            'id_sport.required' => 'The sport cannot be blank !!!',
            'id_country.required' => 'The country cannot be blank !!!',
           
            'image.mimes' => 'Documents must be jbg,jpeg,bmp,pngb',
        ];
    } 
}
