<?php

namespace App\Http\Controllers\Fo;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function welcomeblog(){
        $articles =  Article::all();
        return view('blog.welcomeblog',
            ['articles'=> $articles ]);
    }

    public function article(){
        $articles =  Article::all();
        return view('blog.article',
            ['articles'=> $articles ]);
    }
}
