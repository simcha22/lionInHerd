<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RabbiController extends Controller
{
    public function getRabbis(){
        return view('rabbis.rabbis');
    }
}
