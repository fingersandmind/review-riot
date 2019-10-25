<?php

namespace App\Http\Controllers\Frontend\Article;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;
use App\ArticleCategory;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $articles = Article::where('title', 'like', "%$query%")->paginate(5);
        // dd($articles);

        return view('pages.frontend.pages.search_articles', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        $also_viewed_articles = Article::whereIsFeatured(true)->get();
        $featured_article = Article::whereIsFeatured(true)->findOrFail($article->id);
        return view('pages.frontend.articles.show', compact('featured_article','also_viewed_articles'));
    }

    public function show_category_articles(ArticleCategory $category)
    {
        $articles = $category->articles()->paginate(5);

        return view('pages.frontend.pages.category', compact('articles'));
    }
}
