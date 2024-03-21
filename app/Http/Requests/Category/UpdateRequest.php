<?php

namespace App\Http\Requests\Category;

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


    public function rules(): array
    {
        return [
            'name'=>'required|unique:categories,name,'.$this->id
        ];
    }

    public function messages(): array
    {
        return [
            'name.required'=>'Plese enter news category name',
            'name.unique'=>'News category name is exists! Plese enter the other news category name!'

        ];
    }
}

