<?php

namespace App\Http\Controllers\Backend\Listing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Listing;
use App\Category;

class ListingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listings = Listing::get();
        return view('pages.backend.listing.index', compact('listings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('name','id');
        return view('pages.backend.listing.create', compact('categories'));
    }

    public function checkSlug($slug)
    {
        return Listing::whereSlug($slug)->exists();
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
            return redirect()->back()->withError('List already exists')->withInput();
        }else
        {
            $request->request->add(['slug' => str_slug($request->name)]);
        }

        $status = request()->has('status') ? 'Published' : 'Draft';

        $request->validate([
            'name'          =>  'required|min:2|max:20',
            'slug'          =>  'required|unique:listings',
            'category_id'   =>  'required',
        ]);

        Listing::create(array_merge(
            $request->except(['_token']),
            ['status'   =>  $status]
        ));

        if($request->get('action') === 'save')
        {
            return redirect()->route('listings.index')->withSuccess('Listing successfully created');
        }elseif($request->get('action') === 'continue')
        {
            return redirect()->route('listings.create')->withSuccess('Listing successfully created');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Listing $listing)
    {
        return view('pages.backend.listing.show', compact('listing'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Listing $listing)
    {
        $categories = Category::pluck('name','id');
        return view('pages.backend.listing.edit', compact('listing','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Listing $listing)
    {
        $request->request->add(['slug'  =>  str_slug($request->name)]);

        $status = request()->has('status') ? 'Published' : 'Draft';
        
        $request->validate([
            'name'          =>  'required|min:2|max:20',
            'slug'          =>  'required|unique:listings,slug,' .$listing->id,
            'category_id'   =>  'required',
        ]);

        $listing->update(array_merge(
            $request->except(['_token']),
            ['status'   =>  $status]
        ));

        if($request->get('action') === 'save')
        {
            return redirect()->route('listings.index')->withSuccess('Listing successfully updated');
        }elseif($request->get('action') === 'continue')
        {
            return redirect()->route('listings.edit', $listing->slug)->withSuccess('Listing successfully updated');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Listing $listing)
    {
        $listing->delete();
        return redirect()->route('listings.index')->withSuccess('Listing successfully deleted');
    }
}
