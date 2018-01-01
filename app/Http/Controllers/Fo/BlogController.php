<?php

namespace App\Http\Controllers\Fo;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;


class BlogController extends Controller
{
    public function welcomeblog(){
        $articles =  Article::all();

        return view('blog.welcomeblog',
            ['articles'=> $articles ]);
    }
    /**
     * Show a single article
     *
     * @return Response
     */
    public function show($id){

        $article =  Article::findOrFail($id);
        return view('blog.article',
            ['article'=> $article ]);
    }
}
