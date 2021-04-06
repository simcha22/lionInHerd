<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LiveController extends Controller
{
    public function getLive(){
        return view('pages.live');
    }
}
