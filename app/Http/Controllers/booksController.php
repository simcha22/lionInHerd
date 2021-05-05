<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BookRequest;
use App\Book;

class BooksController extends Controller
{
    public function index(){
        return Book::getBooks();
        //return view('books.books');
    }

    public function store(BookRequest $request){
        Book::create($request);
    }
}
