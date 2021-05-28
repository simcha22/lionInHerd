<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LetterRequest;

use App\Letter;
class LetterController extends Controller
{
    public function index(){
        return Letter::getAll();
    }

    public function store(LetterRequest $request){
        Letter::create($request);
    }

    public function show($id){
        return Letter::getLetter($id);
    }
}
