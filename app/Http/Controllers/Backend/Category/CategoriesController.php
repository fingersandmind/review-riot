<?php

namespace App\Http\Controllers\Backend\Category;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::get();
        return view('pages.backend.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.backend.category.create');
    }
    
    public function checkSlug($slug)
    {
        return Category::whereSlug($slug)->exists();
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
            return redirect()->back()->withError('Category for a list already exists')->withInput();
        }else
        {
            $request->request->add(['slug' => str_slug($request->name)]);
        }

        $request->validate([
            'name'  =>  'required|min:2|max:20',
            'slug'  =>  'required|unique:categories',
        ]);

        Category::create($request->except('_token'));

        if($request->get('action') === 'save')
        {
            return redirect()->route('categories.index')->withSuccess('Category successfully added.');
        }elseif($request->get('action') === 'continue')
        {
            return redirect()->route('categories.create')->withSuccess('Category successfully added.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return view('pages.backend.category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('pages.backend.category.edit', compact('category'));
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->request->add(['slug'  =>  str_slug($request->name)]);
        
        $request->validate([
            'name'  =>  'required|min:2|max:20',
            'slug'  =>  'required|unique:categories,slug,' .$category->id,
        ]);
        $category->update($request->all());

        if($request->get('action') === 'save')
        {
            return redirect()->route('categories.index')->withSuccess('Category successfully updated.');
        }elseif($request->get('action') === 'continue')
        {
            return redirect()->route('categories.edit',$category->slug)->withSuccess('Category successfully updated.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index')->withSuccess('Category successfully deleted.');
    }
}
