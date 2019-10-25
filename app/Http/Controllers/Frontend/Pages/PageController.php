<?php

namespace App\Http\Controllers\Frontend\Pages;

use App\Page;
use App\Article;
use App\ArticleCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index()
    {
        $article_categories = ArticleCategory::get();
        $featured_articles = Article::whereIsFeatured(true)->limit(6)->get();

        return view('pages.frontend.homepage.index', compact('article_categories', 'featured_articles'));
    }

    public function show(Page $slug)
    {
        //make use of this slug to pass on to the frontend view of show.
        $page = Page::whereIsPublished(true)->findOrFail($slug->id);

    	return view('pages.frontend.pages.show',compact('page'));
    }
}
