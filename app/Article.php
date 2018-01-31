<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected  $table= "article";

    protected $fillable = [
        'title', 'description', 'contenu', 'slug', 'active', 'img', 'created_at', 'updated_at', 'category_id'
    ];

    /**
     * Get the category that owns the article.
     */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function lastArticles($nb){
        $articles = Article::where('active', 1)
            ->orderBy('created_at', 'desc')
            ->take($nb)
            ->get();
    }
}
