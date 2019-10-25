<?php

namespace App\Http\Controllers\Backend\Pages;

use App\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use File;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::orderBy('order_no', 'asc')->get();

        return view('pages.backend.pages.index', compact('pages'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.backend.pages.create');
    }

    public function checkSlug($slug)
    {
        return Page::whereSlug($slug)->exists();
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
            return redirect()->back()->withError('Page title already exists')->withInput();
        }else
        {
            $request->request->add(['slug' => str_slug($request->title)]);
        }

        $is_published = request()->has('is_published') ? true : false;

        $request->validate([
            'title'     =>      'required|min:3|max:50',
            'slug'      =>      'required|unique:pages',
            'content'   =>      'required|min:3',
            'order_no'  =>      'required|unique:pages',
        ]);

        $img_arr = [];

        if( request()->has('og_image') ){
            $og_image = $request->file('og_image')->store('SEOFiles','public');
            array_push($img_arr, ['og_image' => $og_image]);
        }

        if( request()->has('twitter_image') ){
            $twitter_image = $request->file('twitter_image')->store('SEOFiles','public');
            array_push($img_arr, ['twitter_image' => $twitter_image]);
        }
        if( request()->has('twitter_card')){
            $twitter_card = $request->file('twitter_card')->store('SEOFiles', 'public');
            array_push($img_arr, ['twitter_card'  => $twitter_card]);
        }

        Page::create(array_merge(
            $request->except('_token'),
            ['is_published' => $is_published],
            $img_arr[0] ?? [],
            $img_arr[1] ?? [],
            $img_arr[2] ?? []
        ));

        if($request->get('action') === 'save'){
            return redirect()->route('pages.index')->withSuccess('Page created successfully!');
        }elseif($request->get('action') === 'continue'){
            return redirect()->route('pages.create')->withSuccess('Page created successfully!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        return view('pages.backend.pages.show', compact('page'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        return view('pages.backend.pages.edit', compact('page'));
    }
    
    public function checkOgImage($og_image)
    {
        return Page::exists(storage_path('app/public/'.$og_image));
    }

    public function checkTwitterImage($twitter_image)
    {
        return Page::exists(storage_path('app/public/'.$twitter_image));
    }

    public function checkTwitterCard($twitter_card)
    {
        return Page::exists(storage_path('app/public/'.$twitter_card));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
        $request->request->add(['slug' => str_slug($request->title)]);

        $is_published = request()->has('is_published') ? true : false;

        $request->validate([
            'title'     =>      'required|min:3|max:50',
            'slug'      =>      'required|unique:pages,slug,'. $page->id,
            'content'   =>      'required|min:3',
            'order_no'  =>      'required|unique:pages,order_no,'. $page->id
        ]);

        $img_arr = [];

        if( request()->has('og_image') ){
            if($this->checkOgImage($page->og_image)){
                File::delete(storage_path('app/public/'.$page->og_image));
            }
            $og_image = $request->file('og_image')->store('SEOFiles','public');
            array_push($img_arr, ['og_image' => $og_image]);
        }

        if( request()->has('twitter_image') ){
            if($this->checkTwitterImage($page->twitter_image)){
                File::delete(storage_path('app/public/'.$page->twitter_image));
            }
            $twitter_image = $request->file('twitter_image')->store('SEOFiles','public');
            array_push($img_arr, ['twitter_image' => $twitter_image]);
        }
        if( request()->has('twitter_card')){
            if($this->checkTwitterCard($page->twitter_card)){
                File::delete(storage_path('app/public/'.$page->twitter_card));
            }
            $twitter_card = $request->file('twitter_card')->store('SEOFiles', 'public');
            array_push($img_arr, ['twitter_card'  => $twitter_card]);
        }

        $page->update(array_merge(
            $request->except('_token'),
            ['is_published' => $is_published],
            $img_arr[0] ?? [],
            $img_arr[1] ?? [],
            $img_arr[2] ?? []
        ));

        if($request->get('action') === 'save'){
            return redirect()->route('pages.index')->withSuccess('Page updated successfully!');
        }elseif($request->get('action') === 'continue'){
            return redirect()->route('pages.edit', $page->slug)->withSuccess('Page updated successfully!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        if($this->checkOgImage($page->og_image)){
            File::delete(storage_path('app/public/'.$page->og_image));
        }
        if($this->checkTwitterImage($page->twitter_image)){
            File::delete(storage_path('app/public/'.$page->twitter_image));
        }
        if($this->checkTwitterCard($page->twitter_card)){
            File::delete(storage_path('app/public/'.$page->twitter_card));
        }

        $page->delete();

        return response()->json('Article successfully deleted!');
    }
}
