<?php

namespace App\Http\Controllers\Main;

use App\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;


class MainController extends Controller
{
    public function index(){
        $articles = Article::where('active', 1)
            ->orderBy('created_at', 'desc')
            ->take(3)
            ->get();

        return view('welcome',
            ['articles'=> $articles ]);
    }

}
