<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserSignup extends FormRequest
{
    public function rules()
    {
        return [
            'firstname'=>'Required|min:4|max:90',
            'lastname'=>'Required|min:4|max:90',
            'email' => 'Required|email|unique:users,user_email',
            'password' => 'Required|min:4',
            'role'=>'sometimes|integer|exists:roles,id',
        ];
    }

    public function messages(){
        return [
            'name.min' => 'השם חייב להיות לפחות 4 תויים',
            'name.required' => 'אנא הקלד שם',
            'email.required' => 'אנא הקלד אימייל',
            'password.required' => 'אנא הקלד סיסמא חזקה',
            'password.min' => 'הסיסמא חייבת להיות לפחות 4 תוים',
        ];
    }
}
