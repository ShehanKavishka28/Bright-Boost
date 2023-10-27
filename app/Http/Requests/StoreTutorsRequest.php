<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTutorsRequest extends FormRequest
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
            'name'=>'required',
            'email'=>['required','unique:users,email'],
            // 'password'=>bcrypt($validatedData['email']),
            'address'=>'required',
            'tp'=>'required',
            'gender'=>'required',
            'address'=>'required',
            'courses'=>'required',

            //
        ];
    }
}