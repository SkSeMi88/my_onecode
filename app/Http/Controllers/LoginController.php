<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //

    public function index()
    {

        // return app('view')->make('login.index');
        return view()->make('login.index');
        // return view('login.index');
    }
    
    public function store()
    {
        return view('login.store');

    }
}
