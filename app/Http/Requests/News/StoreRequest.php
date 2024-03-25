<?php

namespace App\Http\Requests\News;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'title'=>'required',
            'intro'=>'required',
            'content'=>'required',
            'key_word'=>'required',
            'image'=>'required|mimes:jpg,bmp,png,jpeg',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required'=>'Please enter news title',
            'intro.required'=>'Please enter news intro',
            'content.required'=>'Please enter news content',
            'key_word.required' => 'please enter the key word',
            'image.required'=>'Please enter news image',
            'image.mimes' => 'Image must jpg, bmp, png, jpeg',
        ];
    }
}
