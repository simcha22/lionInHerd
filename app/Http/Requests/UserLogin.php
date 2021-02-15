<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserLogin extends FormRequest
{
    public function rules()
    {
        return [
            'email'=>'Required|email',
            'password' => 'Required|min:4'
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'אנא הקלד כתובת מייל',
            'password.required' => 'אנא הקלד סיסמא'
        ];
    }
}
