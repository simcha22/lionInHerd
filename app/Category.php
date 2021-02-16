<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public static function getCategoryByType($type)
    {
        return self::where("type",$type)->get();
    }
}
