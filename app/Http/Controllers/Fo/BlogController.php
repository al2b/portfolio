<?php

namespace App\Http\Controllers\Fo;

use App\Article;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;


class BlogController extends Controller
{
    public function welcomeblog(){
        $articles =  Article::with('category')->orderByDesc("created_at")->get();

        $categories = Category::all();
        return view('blog.welcomeblog',
            ['articles'=> $articles,
                'categories' => $categories]);
    }

    /**
     * Show a single article
     *
     * @return Response
     */
    public function show($slug){

        $article =  Article::where('slug', $slug)->first();
        $articles = Article::where('active', 1)
            ->orderBy('created_at', 'desc')
            ->take(3)
            ->get();
        return view('blog.article',
            ['article'=> $article ],
            ['articles' => $articles]);
    }

    /**
     * Show a list of articles, filter by category
     *
     * @return Response
     */
    public function showCat($slugCat){

        $category = Category::where('slug', $slugCat)->first();
        $articles = Article::where('category_id', $category)->orderBy('created_at', 'desc')->get();
        return view('blog.category',
            ['category'=> $category ],
            ['articles' => $articles]);
    }

}
