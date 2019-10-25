<?php

namespace App\Http\Controllers\Backend\Article;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use App\Article;
use App\ArticleCategory;
use File;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::get();

        return view('pages.backend.articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = ArticleCategory::pluck('name','id');
        return view('pages.backend.articles.create', compact('categories'));
    }

    public function checkSlug($slug)
    {
        return Article::whereSlug($slug)->exists();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if( $this->checkSlug(str_slug($request->title)) )
        {
            return redirect()->back()->withError('Article title already exists')->withInput();
        }else
        {
            $request->request->add(['slug' => str_slug($request->title)]);
        }

        $is_featured = request()->has('is_featured') ? true : false;
        $is_toggled = request()->has('is_toggled') ? true : false;

        $request->validate([
            'title'         =>  'required|min:3|max:50',
            'slug'          =>  'required|unique:articles',
            'body'          =>  'required|min:3',
            'category'      =>  'required',
            'image'         =>  'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:min_width=50,max_width=2000, min_height=50, max_height=2000',
            'logo_title'    =>  'required|min:3|max:20',
            'logo'          =>  'required|image|mimes:jpeg,png,jpg,gif,svg|dimensions:min_width=50, max_width=250, min_height=50, max_height=250',
        ]);

        $image = $request->file('image')->store('gallery','public');

        $thumbnail = $request->file('image')->store('thumbnail','public');

        $logo   =   $request->file('logo')->store('logo', 'public');

        $imageLogo = Image::make(public_path("storage/{$logo}"))->fit(50,50);
        $imageLogo->save();

        $imageThumbnail = Image::make(public_path("storage/{$thumbnail}"))->fit(450,250);
        $imageThumbnail->save();

        auth()->user()->articles()->create(array_merge(
            $request->except('_token'),
            ['featured_image'   =>  $image],
            ['thumbnail'        => $thumbnail],
            ['logo'             =>  $logo],
            ['is_featured'      =>  $is_featured],
            ['is_toggled'       =>  $is_toggled]
        ))->categories()->attach($request->category);
        
        if($request->get('action') === 'save'){
            return redirect()->route('articles.index')->withSuccess('Articles created successfully!');
        }elseif($request->get('action') === 'continue'){
            return redirect()->route('articles.create')->withSuccess('Articles created successfully!');
        }
            
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('pages.backend.articles.show',compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        $categories = ArticleCategory::pluck('name','id');
        return view('pages.backend.articles.edit', compact('article','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function checkImage($image)
    {
        return File::exists(storage_path('app/public/'.$image));
    }

    public function checkThumbnail($thumbnail)
    {
        return File::exists(storage_path('app/public/'.$thumbnail));
    }

    public function checkLogo($logo)
    {
        return File::exists(storage_path('app/public/'.$logo));
    }

    public function update(Request $request, Article $article)
    {
        $request->request->add(['slug' => str_slug($request->title)]);

        $is_featured = request()->has('is_featured') ? true : false;
        $is_toggled = request()->has('is_toggled') ? true : false;

        $request->validate([
            'title'         =>  'required|min:3|max:50',
            'slug'          =>  'required|unique:articles,slug,'. $article->id,
            'body'          =>  'required|min:3',
            'category'      =>  'required',
            'image'         =>  'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:min_width=50,max_width=2000, min_height=50, max_height=2000',
            'logo_title'    =>  'required',
            'logo'          =>  'sometimes|image|mimes:jpeg,png,jpg,gif,svg|dimensions:min_width=50, max_width=250, min_height=50, max_height=250',
        ]);

        $img_arr = [];

        if( request()->has('image') ){
            if($this->checkImage($article->featured_image)){
                File::delete(storage_path('app/public/'.$article->featured_image));
            }
            $image = $request->file('image')->store('gallery','public');
            array_push($img_arr, ['featured_image' => $image]);

            if($this->checkThumbnail($article->thumbnail)){
                File::delete(storage_path('app/public/'.$article->thumbnail));
            }
            $thumbnail = $request->file('image')->store('thumbnail','public');
            $imageThumbnail = Image::make(public_path("storage/{$thumbnail}"))->fit(450,250);
            $imageThumbnail->save();
            array_push($img_arr, ['thumbnail' => $thumbnail]);
        }
        if( request()->has('logo' )){
            if($this->checkLogo($article->logo)){
                File::delete(storage_path('app/public/'.$article->logo));
            }
            $logo = $request->file('logo')->store('logo', 'public');
            $imageLogo = Image::make(public_path("storage/{$logo}"))->fit(50,50);
            $imageLogo->save();
            array_push($img_arr, ['logo'  => $logo]);
        }

        $article->update(array_merge(
            $request->except('_token'),
            $img_arr[0] ?? [],
            $img_arr[1] ?? [],
            $img_arr[2] ?? [],
            ['is_featured'  =>  $is_featured],
            ['is_toggled'   =>  $is_toggled]
        ));
        $article->categories()->sync($request->category);
        
        
        if($request->get('action') === 'save'){
            return redirect()->route('articles.index')->withSuccess('Articles updated successfully!');
        }elseif($request->get('action') === 'continue'){
            return redirect()->route('articles.edit', $article->slug)->withSuccess('Articles updated successfully!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article, Request $request)
    {
        
        if($this->checkImage($article->featured_image)){
            File::delete(storage_path('app/public/'.$article->featured_image));
        }
        if($this->checkThumbnail($article->thumbnail)){
            File::delete(storage_path('app/public/'.$article->thumbnail));
        }
        if($this->checkLogo($article->logo)){
            File::delete(storage_path('app/public/'.$article->logo));
        }
        $article->delete();

        return response()->json('Article successfully deleted!');
    }
}
