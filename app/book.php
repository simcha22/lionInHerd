<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public static function getBooks(){
        return self::orderBy('name')->get();
    }
}
