<?php

namespace App\Http\Controllers\Backend\ArticleCategory;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use App\ArticleCategory;
use File;

class ArticleCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = ArticleCategory::get();
        
        return view('pages.backend.articlecategory.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.backend.articlecategory.create');
    }

    public function checkSlug($slug)
    {
        return ArticleCategory::whereSlug($slug)->exists();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if( $this->checkSlug(str_slug($request->name)) )
        {
            return redirect()->back()->withError('Category already exists')->withInput();
        }else
        {
            $request->request->add(['slug' => str_slug($request->name)]);
        }

        $request->validate([
            'name'  =>  'required|min:2|max:20',
            'slug'  =>  'required|unique:article_categories',
            'logo'  =>  'required|image|mimes:jpeg,png,jpg,gif,svg|dimensions:min_width=50, max_width=250, min_height=50, max_height=250'
        ]);

        $logo = $request->file('logo')->store('logo', 'public');
        $logoImage = Image::make(public_path("storage/{$logo}"))->fit(50,50);
        $logoImage->save();

        ArticleCategory::create(array_merge(
            $request->all(),
            ['logo' =>  $logo]
        ));

        if($request->get('action') === 'save')
        {
            return redirect()->route('articlecategory.index')->withSuccess('Category successfully added.');
        }elseif($request->get('action') === 'continue')
        {
            return redirect()->route('articlecategory.create')->withSuccess('Category successfully added.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ArticleCategory $articlecategory)
    {
        return view('pages.backend.articlecategory.show', compact('articlecategory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ArticleCategory $articlecategory)
    {
        return view('pages.backend.articlecategory.edit', compact('articlecategory'));
    }

    public function checkLogo($logo)
    {
        return File::exists(storage_path('app/public/'.$logo));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ArticleCategory $articlecategory)
    {
        $request->request->add(['slug'  =>  str_slug($request->name)]);

        $request->validate([
            'name'  =>  'required|min:2|max:20',
            'slug'  =>  'required|unique:article_categories,slug,'. $articlecategory->id,
            'logo'  =>  'sometimes|image|mimes:jpeg,png,jpg,gif,svg|dimensions:min_width=50, max_width=250, min_height=50, max_height=250'
        ]);

        $img_arr = [];

        if( request()->has('logo' )){
            if($this->checkLogo($articlecategory->logo)){
                File::delete(storage_path('app/public/'.$articlecategory->logo));
            }
            $logo = $request->file('logo')->store('logo', 'public');
            $logoImage = Image::make(public_path("storage/{$logo}"))->fit(50,50);
            $logoImage->save();
            array_push($img_arr, ['logo'  => $logo]);
        }


        $articlecategory->update(array_merge(
            $request->all(),
            $img_arr[0] ?? []
        ));

        if($request->get('action') === 'save')
        {
            return redirect()->route('articlecategory.index')->withSuccess('Category successfully updated.');
        }elseif($request->get('action') === 'continue')
        {
            return redirect()->route('articlecategory.edit',$articlecategory->slug)->withSuccess('Category successfully updated.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ArticleCategory $articlecategory)
    {
        if($this->checkLogo($articlecategory->logo)){
            File::delete(storage_path('app/public/'.$articlecategory->logo));
        }
        $articlecategory->delete();

        return redirect()->route('articlecategory.index')->withSuccess('Category successfully deleted.');
    }
}
