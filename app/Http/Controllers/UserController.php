<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserLogin;
use Illuminate\Http\Request;
use App\Http\Requests\UserSignup;
use App\User;

class UserController extends Controller
{
    public function index(){
        return User::getAll();
    }

    public function store(UserSignup $request){
        return User::create($request);
    }
    // public function displaySignup()
    // {
    //     return view('users.signup');
    // }

    // public function processSignup(UserSignup $request)
    // {
    //     User::store($request);
    //     return redirect('login');
    // }

    // public function displayLogin()
    // {
    //     return view('users.login');
    // }

    // public function processLogin(UserLogin $request)
    // {
    //     if (User::loginUser($request)) {
    //         return redirect('books')->with('status', 'ברוכים הבאים התחל לקנות');
    //     }
    //     return redirect('login')->with('status-fail', 'כתובת המייל או הסיסמא אינם נכונים');
    // }

    // public function displayContactRabbi()
    // {
    //     return view('contact_us.contact_rabbi');
    // }
    // public function displayContactSystem()
    // {
    //     return view('contact_us.contact_system');
    // }
}
