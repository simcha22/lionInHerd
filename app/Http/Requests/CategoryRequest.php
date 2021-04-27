<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required|min:2',
            'title' => 'required|min:2',
            'slug' => 'required|min:2|unique:lessons,lesson_slug',
            'type' =>'required|min:2',
            'information'=>'required|min:10',
            'image_url'=>'required',
        ];
    }
}
