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
            'image'=>'required|mimes:jpg,bmp,png,jpeg',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required'=>'Plese enter news title',
            'intro.required'=>'Plese enter news intro',
            'content.required'=>'Plese enter news content',
            'image.required'=>'Plese enter news image',
            'image.mimes' => 'Image must jpg, bmp, png, jpeg',
        ];
    }
}
