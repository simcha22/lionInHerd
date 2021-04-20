<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public static function getCategoryByType($type)
    {
        return self::where("type",$type)->get();
    }
    public static function create($request){
        $category = new self();
        $category->category_id = Str::uuid();
        $category->category_name = $request->name;
        $category->category_title = $request->title;
        $category->category_slug = $request->slug;
        $category->category_type = $request->type;
        $category->category_information = $request->information;
        $category->category_image_url = $request->image->stora(); //שמירת כתובת התמונה ושמירת הקובץ 
        $category->save();
        
    }
}
