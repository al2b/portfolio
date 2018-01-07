<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected  $table= "article";

    public function lastArticles($nb){
        $articles = Article::where('active', 1)
            ->orderBy('created_at', 'desc')
            ->take($nb)
            ->get();
    }
}
