<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Register a new article
     *
     * @return \Illuminate\Http\Response
     */
    public function createArticle()
    {
        return view('blog.new-article');
    }

    public function store()
    {
        $input = Request::all();
        return $input;
    }
}
