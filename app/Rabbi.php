<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rabbi extends Model
{
    public static function getRabbis(){
        return self::orderBy('rabbi_slug')->get();
    }

    public static function create($request){

        $rabbi = new self();
        $rabbi->rabbi_id = Str::uuid();
        $rabbi->user_id = $request->user;
        $rabbi->rabbi_name = $request->name;
        $rabbi->rabbi_title = $request->title;
        $rabbi->rabbi_slug = $request->slug;
        $rabbi->rabbi_image_url = $request->image;
        $rabbi->rabbi_information = $request->information;

        $rabbi->save();
    }
    
    public static function getRabbi($id){
        return self::where('rabbi_id', $id);
    }
}
