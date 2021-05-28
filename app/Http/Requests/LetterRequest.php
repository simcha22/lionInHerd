<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LetterRequest extends FormRequest
{
    public function rules()
    {
        return [
            'sender' => 'required|min:2',
            'getting' => 'required|min:2',
            'title' => 'required|min:2',
            'information'=>'required|min:10',
            'user'=>'exists:Users,user_id',
            'rabbi'=>'exists:Rabbis,rabbi_id',
        ];
    }
}
