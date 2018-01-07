<?php

namespace App\Http\Controllers\Fo;

use App\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;


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
        $articles = Article::where('active', 1)
            ->orderBy('created_at', 'desc')
            ->take(3)
            ->get();
        return view('blog.article',
            ['article'=> $article ],
            ['articles' => $articles]);
    }
}
