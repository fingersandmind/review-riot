<?php

namespace App\Http\Controllers\Backend\Review;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Review;
use App\Listing;

class ReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews = Review::get();
        return view('pages.backend.reviews.index', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listings = Listing::pluck('name', 'id');
        return view('pages.backend.reviews.create', compact('listings'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $status = request()->has('status') ? 'Published' : 'Draft';

        $request->validate([
            'content'       =>  'required|min:2',
            'listing_id'    =>  'required',
        ]);

        Review::create(array_merge(
            $request->except(['_token', 'status']),
            ['status'   =>  $status]
        ));

        if($request->get('action') === 'save')
        {
            return redirect()->route('reviews.index')->withSuccess('Listing successfully created');
        }elseif($request->get('action') === 'continue')
        {
            return redirect()->route('reviews.create')->withSuccess('Listing successfully created');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Review::find($id)->delete();
        return redirect()->route('reviews.index')->withSuccess('Review successfully deleted!');
    }
}
