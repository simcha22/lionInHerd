<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LessonRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required|min:2',
            'title' => 'required|min:2',
            'slug' => 'required|min:2|unique:lessons,lesson_slug',
            'type' =>'required|min:2',
            'language' =>'required',
            'information'=>'required|min:10',
            'play_date'=>'required',
            'duration'=>'required',
            'likes'=>'required',
            'image_url'=>'required',
            'audio_url'=>'required',
            'video_url'=>'required',
        ];
    }
}
