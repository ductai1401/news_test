<?php

namespace App\Http\Requests\Client\Comment;

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
            'content' => 'required|max:1000',
        ];
    }
    public function messages(): array
    {
        return [
            'content.unique' => 'The comment cannot be left blank !!!',
            'content.max' => 'Comments must not exceed 1000 words !!!',
        ];
    } 
}
