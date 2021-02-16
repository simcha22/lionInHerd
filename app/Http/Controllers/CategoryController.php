<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function displayCategoryLessons(){
        //$date['category'] = Category::getCategoryByType("lessons");
        return view('lessons.category');
    }

    public function displayCategoryBooks(){
        // $date['category'] = Category::getCategoryByType("books");
        // return view('');
     }
}
