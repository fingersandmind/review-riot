@extends('layouts.frontend.master')

@section('content')

<div class="blog-header container-fluid mb-lg-4 mb-3 pt-xl-5 pt-lg-4 pt-3">
    <div class="clearfix container pt-3 pt-lg-4 pt-xl-5">
        <div class="d-flex justify-content-center row" style="">
            <div class="col-lg-8 pl-3 pl-lg-4 pl-xl-5 pr-3 pr-lg-4 pr-xl-5">
                <h4 class="font-tragicmarker font-weight-normal letter-spacing-5 mb-3 mb-md-4 text-center text-md-left text-uppercase">Products</h4>

                <div class="blog-title col-12 col-xl-9 mb-3 mb-md-4 p-0">
                    <h1 class="blog-title lineheight60">{{ $featured_article->title }}</h1>
                </div>
                <div class="align-items-md-center align-items-start d-md-flex mb-0 mb-3 row">
                    <div class="align-items-center col-3 col-sm-2 col-xl-1 text-right">
                        <img src="{{ asset('assets/images/avatar.png') }}" class="bordered-image d-inline-block">

                    </div>
                    <div class="align-items-center col-9 col-sm-10 col-xl-11 d-md-flex">
                        <div class="border-sm-0 border-right d-block d-md-inline-block ml-1"><span class="d-inline-block">Posted by</span> <span class="d-inline-block mr-3 mr-lg-4"><b class="ml-1">{{ ucfirst($featured_article->user->name) }}</b></span></div>

                        <div class="d-block d-md-inline-block">
                            <p class="date ml-md-4">{{ $featured_article->created_at->toFormattedDateString() }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="blog-banner">
    <div class="container">
        <div class="row">
            <div class="blog-featured-image col-lg-12 mb-4 mb-lg-5">
                <img src="/storage/{{ $featured_article->featured_image }}" class="ctm-rounded w-100">
            </div>
        </div>
    </div>
</div>
<div class="container-fluid mb-2 mb-lg-5 listing-page">
    <div class="container clearfix">
        <div class="d-flex justify-content-center row" style="">
            <div class="col-lg-8 pl-3 pl-lg-4 pl-xl-5 pr-3 pr-lg-4 pr-xl-5">
                <div class="">

                    <p class="first-letter mb-3 mb-lg-4 mb-xl-4">{!! $featured_article->body !!}</p>

                </div>
                <hr>

                <div class="author-profile ctm-rounded mb-xl-5 mb-4 p-4 p-md-5 text-center text-md-left text-white" style="">
                    <div class="row">
                        <div class="col-md-3 d-flex align-items-center ">
                            <img src="{{ asset('assets/images/big_avatar.png') }}" class="bordered-image bordered-image-spacing mb-4 mb-md-0 mx-auto mx-md-0 w-md-100">
                        </div>
                        <div class="col-md-9">
                            <div class="pl-lg-3">
                                <h5 class="mb-4">Smiles Davis</h5>
                                <p class="text-white mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <ul class="m-0 p-0">
                                    <li class="d-inline-block mr-3 mr-md-4">
                                        <a href="#" class="text-white"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="d-inline-block mr-3 mr-md-4">
                                        <a href="#" class="text-white"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="d-inline-block mr-3 mr-md-4">
                                        <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li class="d-inline-block mr-3 mr-md-4">
                                        <a href="#" class="text-white"><i class="fab fa-linkedin"></i></a>
                                    </li>
                                    <li class="d-inline-block mr-3 mr-md-4">
                                        <a href="#" class="text-white"><i class="fab fa-youtube m-0"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="border-bottom mb-lg-5 mb-md-4 mb-3  pt-md-4 pt-3 spacer"></div>
                <div class="mb-4 mb-lg-0 most-viewed">
                    <h3 class="pt-md-4 mb-xl-5 mb-lg-4 mb-3">Others also viewed these posts</h3>
                    <div class="row">
                        @foreach($also_viewed_articles->take(4) as $viewed)
                            @if(!($featured_article->slug === $viewed->slug))
                                <div class="col-lg-3 col-sm-6 mb-xl-5 mb-4  mb-lg-0">
                                    <a href="{{ route('article.show', $viewed->slug) }}"><img src="/storage/{{ $viewed->thumbnail }}" class="mb-4 w-100"></a>
                                    <p class="mb-md-4 mb-3"><b>{{ $viewed->title }}</b></p>
                                    <h6>UPDATED BY &nbsp; {{ $viewed->user->name }}</h6>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- SIDE BAR -->
        </div>
    </div>
</div>
@endsection