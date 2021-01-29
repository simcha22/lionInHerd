<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BooksController extends Controller
{
    public function getBooks(){
        $data['books'] = Book::getBooks();
        return view('books.books', $data);
    }
}
