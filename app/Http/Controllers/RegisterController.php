<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //

        //

        public function index()
        {
    
            // return app('view')->make('register.index');
            return view()->make('register.index');
            // return view('register.index');
        }
        
        public function store()
        {
            return view('login.store');
    
        }
}
