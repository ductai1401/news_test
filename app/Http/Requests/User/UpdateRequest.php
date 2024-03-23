<?php

namespace App\Http\Requests\User;

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
            'email' => 'required|unique:users,email,'.$this->id,
            'fullname' => 'required',
            'phone' => 'required|numeric|unique:users,phone,'.$this->id,

        ];
    }

    public function messages() {
        return [
            'fullname.required' => 'Please enter your full name',
            'email.unique' => 'This email already exists, please re-enter',
            'email.required' => 'please enter email',
            'phone.unique' => 'This phone already exists, please re-enter',
            'phone.required' => 'Please enter the phone number',
            'phone.numeric' => 'Phone number must be alphanumeric',
        ];
    }
}
