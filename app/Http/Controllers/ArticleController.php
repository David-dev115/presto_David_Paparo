<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

use App\Models\Article;
use App\Models\Category;

class ArticleController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            new Middleware('auth', only: ['create' , 'myArticles']),
        ];
    }
    public function create() {
        return view ('articles.create');
    }

        public function index () {

        $articles = Article::where('is_accepted', true)->orderBy('created_at' , 'desc')->paginate(6);
        return view('articles.index' , compact('articles'));

    }


    public function show (Article $article) {

        return view ('articles.show' , compact('article') );

    }

    public function byCategory(Category $category){
        
    //     return view('articles.byCategory', [
    //     'articles' => $category->articles,
    //     'category' => $category
    // ]);
            $articles = $category->articles()->where('is_accepted', true)->get();

            return view('articles.byCategory', compact('articles', 'category'));

    }

    public function myArticles()
    {
    $articles = auth()->user()->articles()->latest()->get();

    return view('articles.myArticles', compact('articles'));
    }
}
