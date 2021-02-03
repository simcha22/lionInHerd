<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function displaySingup()
    {
        return view('users.singup');
    }

    public function displayLogin()
    {
        return view('users.login');
    }

    public function displayContactRabbi(){
        return view('contact_us.contact_rabbi');
    }
    public function displayContactSystem(){
        return view('contact_us.contact_system');
    }
}
