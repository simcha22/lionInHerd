<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    public static function getAll(){
        return self::orderBy('category_slug')->get();
    }
    
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
        $category->category_image_url = $request->image_url; //שמירת כתובת התמונה ושמירת הקובץ 
        $category->save();
    }

    public static function getCategory($id){
        return self::where('category_id', $id)->firstOrFail();
    }
}
