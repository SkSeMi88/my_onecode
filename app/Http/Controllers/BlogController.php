<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    //

    public function index()
    {
        
        return 'Посты о блоге'
    }

    public function show()
    {
        return 'Один конкректный Пост о блоге'
    }

    public function like()
    {
        return 'Поставить лайк в посте в блоге'
    }
}
