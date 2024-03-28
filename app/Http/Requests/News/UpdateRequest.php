<?php

namespace App\Http\Requests\News;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'title'=>'required|unique:news,title,'.$this->id,
            'intro'=>'required',
            'content'=>'required',
            'id_category'=>'required',
            'key_word'=>'required',

        ];
    }

    public function messages(): array
    {
        return [
            'title.required'=>'Plese enter news title',
            'title.unique'=>'Title is not duplicates',
            'intro.required'=>'Plese enter news intro',
            'content.required'=>'Plese enter news content',
            'key_word.required'=>'Plese enter news key word',
            'id_category.required'=>'Please enter category',

        ];
    }
}

