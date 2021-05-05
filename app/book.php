<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public static function getBooks(){
        return self::orderBy('book_slug')->get();
    }
    
    public static function create($request){
        $book = new self();
        $book->book_id = str::uuid();
        $book->category_id = $request->category;
        $book->rabbi_id = $request->rabbi;
        $book->book_name = $request->name;
        $book->book_title = $request->title;
        $book->book_slug = $request->slug;
        $book->book_nicname = $request->nicname;
        $book->book_information = $request->information;
        $book->book_price = $request->price;
        $book->book_image_url = $request->image;
        $book->book_quantity = $request->quantity;
        $book->book_expense = $request->expense;
        $book->book_volumes = $request->volumes;
        $book->book_rating = $request->rating;
        $book->book_likes = $request->likes;
        $book->book_production_data = $request->profuction;
        $book->save();
    }
}
