<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\StoreArticlePost;
use Faker\Provider\DateTime;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Category;
use Illuminate\Support\Facades\Storage;


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
        $articles = Article::all();
        $categories = Category::all();
        return view('home',
            ['articles' => $articles,
                'categories' => $categories]);
    }

    /**
     * Register a new article
     *
     * @return \Illuminate\Http\Response
     */
    public function createArticle()
    {
        $categories = Category::all();
        $select = [];
        foreach ($categories as $category) {
            $select[$category->id] = $category->name;
        }

        return view('bo.new-article',
            ['select' => $select]);
    }

    /**
     * Register a new article
     *
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArticlePost $request)
    {
        $input = $request->all();
        $article = new Article();

        $article->title = $input["title"];
        $article->description = $input["description"];
        $path = Storage::disk('img')->put('', $request->file('img'));
        $article->img = $path;
        $article->contenu = $input["contenu"];
        $article->slug = $input["slug"];
        $article->active = $input["active"];
        $article->created_at = Carbon::now();
        if (!empty($input["category"])) {
            $article->category_id = $input["category"];
        }
        $article->save();
        return redirect()->route('home')->with('status', 'Article ajouté : well done !');
    }

    /**
     * Show a single article
     *
     * @return Response
     */
    public function view($id)
    {

        $article = Article::findOrFail($id);

        return view('bo.display-article',
            ['article' => $article]
        );
    }

    public function remove(Request $request, $id)
    {

        $article = Article::findOrFail($id);
        $article->delete();
        return redirect()->action('HomeController@index');
    }

    public function edit($id)
    {
        $article = Article::where('id', $id)->firstOrFail();
        return view('bo.edit-article',
            ['article' => $article]
        );
    }

    public function update(Request $request, $id)
    {


        $article = Article::findOrFail($id)->first(); //->fill($request->all())->save();
        $image = $article->img;

        if ($request->hasFile('img')) {
            $article->fill($request->all());
            $path = Storage::disk('img')->put('', $request->file('img'));
            $article->img = $path;
            $article->save();
        } else {
            $article->fill($request->all());
            $article->img = $image;
            $article->save();
        }
        session()->flash('message', 'Successfully updated the post');
        return redirect()->back(); /* redirige vers la vue d'édition */

    }
}
