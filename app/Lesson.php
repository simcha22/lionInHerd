<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Lesson extends Model
{
    public static function getAll(){
        return self::orderBy('lesson_slug')->get();
    }
    public static function create($request){
        $lesson = new self();
        $lesson->lesson_id = Str::uuid();
        $lesson->lesson_name = $request->name;
        $lesson->lesson_title = $request->title;
        $lesson->lesson_slug = $request->slug;
        $lesson->lesson_type = $request->type;
        $lesson->lesson_language = $request->language;
        $lesson->lesson_information = $request->information;
        $lesson->lesson_play_date = $request->play_date;
        $lesson->lesson_duration = $request->duration;
        $lesson->lesson_likes = $request->likes;
        $lesson->lesson_image_url = $request->image_url;
        $lesson->lesson_audio_url = $request->audio_url;
        $lesson->lesson_video_url = $request->video_url;
        $lesson->save();
    }

    public static function getLessonById($id){
        return self::where('lesson_id',$id)->firstOrFail();
    }
}
