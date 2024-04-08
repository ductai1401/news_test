<?php

namespace App\Http\Requests\Olympic_sport;

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
            'id_olympic' => 'required',
            'id_sport' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'id_sport.required' => 'The Sport cannot be left blank !!!',
            'id_olympic.required' => 'The Olympic cannot be left blank !!!',
        ];
    } 
}
