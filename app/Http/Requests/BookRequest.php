<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
{
    public function rules()
    {
        return [
            'category'=> 'required|exists:categories,category_id',
            'rabbi'=> 'required|exists:rabbis,rabbi_id',
            'title' => 'required|min:2',
            'slug' => 'required|min:2|unique:books,book_slug',
            'name' => 'required|min:2|string',
            'nicname' => 'required|min:2',
            'price' => 'required|integer',
            //'image' => 'file',
            'quantity' => 'required',
            'expense' => 'required',
            'volumes' => 'required',
            'rating' => 'required',
            'likes' => 'required',
            'profuction' => 'required|date',
        ];
    }
}
