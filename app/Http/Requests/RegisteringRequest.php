<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisteringRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nickname' => [
                'bail',
                'required',
                'filled',
                'unique:users,nickname',
            ],
            'email' => [
                'bail',
                'required',
                'email',
                'filled',
                'unique:users,email',
            ],
            'password' => [
                'bail',
                'required',
                'min:8',
                'filled',
                'confirmed',
            ],
        ];
    }
}
