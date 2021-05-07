<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RabbiRequest;
use App\Rabbi;
class RabbiController extends Controller
{
    public function index(){
        return Rabbi::getRabbis();
    }
    public function store(RabbiRequest $request){
        return Rabbi::create($request);
    }
    public function show($id){
        return Rabbi::getRabbi($id);
    }
}
