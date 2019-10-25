@extends('layouts.frontend.master')

@push('additionalCSS')
<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!--Owl Slider-->
<link rel="stylesheet" href="{{ asset('assets/owlcarousel/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/owlcarousel/owl.theme.default.min.css') }}">
@endpush

@section('content')

<div id="home-banner" class="background container-fluid section-regular">
    <div class="container home-background clearfix ctm-rounded">
        <div class="row">
            <div class="col-12 col-lg-8 col-xl-6 pb-4 pl-4 p-md-5 pr-0 pr-4 pr-md-5 pt-4">
                <div class="pb-0 pl-4-pr-4 pr-0 pr-0 pt-0">
                    <div class="mb-3 mb-4 mb-xl-5 pr-xl-5 pt-2">
                        <h1 class="text-center text-lg-left text-white">We Review Stuff Thoroughly So You Don’t Get Ripped Off</h1>
                    </div>

                    <div class="bg-light ctm-rounded d-block d-md-flex mb-4 pb-3 pt-3">
                        <div class="border-sm-0 d-md-inline-block featured-review p-2 p-md-4 text-center text-md-left w-61" style="">
                            <h6 class="mb-2 mb-md-4 pt-2">FEATURED REVIEW</h6>
                            <h4>Online Retailer of the Year</h4>
                            <p class="mb-4">Amazing clothes and so bloody cheap!</p>
                            <a href="#" class="d-inline-block gen-btn mb-2 text-white">read about Jane Lu’s Showpo</a>
                        </div>
                        <div class="align-content-center d-md-flex  justify-content-center pl-4 pr-4 w-39" style="">
                            <div class="align-items-center d-flex justify-content-center" style="">
                                <img src="{{ asset('assets/images/showpo.png') }}" class="mx-auto w-md-100" style=""></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- home-banner -->
<div class="container-fluid p-lg-4 p-md-4 p-3">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-4 border-right pt-4 pb-4 border-md-0">
                <div class="row text-center text-lg-left">
                    <div class="col-lg-4 p-0 text-center">
                        <img src="{{ asset('assets/images/number-1.png') }}" class="mb-3 mb-lg-0">
                    </div>
                    <div class="align-items-center col-lg-8 p-0">
                        <h5 class="mb-2 mb-lg-3">We like to Review Shit</h5>
                        <p class="mx-lg-0 mx-auto">We’re crazy shoppers &amp; consumers</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 border-right pt-4 pb-4 border-md-0">
                <div class="align-items-center d-flex row text-center text-lg-left">
                    <div class="col-lg-4 p-0 text-center">
                        <img src="{{ asset('assets/images/number-2.png') }}" class="mb-3 mb-lg-0">
                    </div>
                    <div class="col-lg-8 p-0">
                        <h5 class="mb-2 mb-lg-3">Raw Like Beef Carpaccio</h5>
                        <p class="pr-lg-5">If it sucks, we’ll say so. If it’s awesome, then we’ll say it too</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 pt-4 pb-4">
                <div class="align-items-center d-flex row text-center text-lg-left">
                    <div class="col-lg-4 p-0 text-center">
                        <img src="{{ asset('assets/images/number-3.png') }}" class="mb-3 mb-lg-0">
                    </div>
                    <div class="col-lg-8 p-0 pr-lg-5">
                        <h5 class="mb-2 mb-lg-3">We’ll Stop You From Making A Shitty Decision</h5>
                        <p>We’ll call out expensive rip-offs so you don’t get stung</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- why-us -->
<div id="good-shopping-sites" class="container-fluid mb-5">
    <div class="container clearfix background text-white">
        <div class="row">
            <div class="col-lg-8 ctm-rounded first-column mb-4 mb-lg-0 p-xl-5 p-lg-4 p-3">
                <div class="mb-xl-5 mt-xl-3 p-3 p-lg-4 p-xl-5">
                    <h2 class="mb-2 mb-lg-4">Online Shopping <br>Sites That Don’t Suck</h2>
                    <h4 class="mb-4 mb-lg-5">These stores are actually OK</h4>
                    <a href="#" class="d-inline-block gen-btn text-white">let's go</a>
                </div>
            </div>
            <!-- first-column -->
            <div class="col-lg-4 ctm-rounded p-3 p-lg-4 p-xl-5 second-column">
                <div class="mb-4 mt-3 pb-4 pt-xl-4 pt-lg-3 pt-2">
                    <h4 class="mb-3 mb-md-4 pr-xl-5 mr-xl-5">If you go to David Jones, No One will Serve You</h4>
                    <h5 class="mb-lg-5 pb-4">“You’ll stand around like a schmock!” </h5>
                    <a href="#" class="gen-btn text-white mb-lg-0 mb-5">Read our experience</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- good-shopping-sites -->
@if ($article_categories->count() > 0)
<div id="choices-offer" class="container-fluid mb-5 pb-lg-5">
    <div class="container pl-5 pr-5 clearfix">
        <div class="row">

            <div class="service-slider owl-carousel owl-theme">

                @foreach($article_categories as $category)
                    <div class="item pb-4 pt-4 text-center">
                        <div class="pb-2 pt-2">
                            <a href="{{ route('article.show-category', $category->slug) }}">
                                <img src="/storage/{{ $category->logo }}" class="m-auto pb-4">
                                <h6>{{ $category->name }}</h6>
                            </a>
                        </div>
                    </div>
                @endforeach
                
            </div>
        </div>
    </div>
</div>
@endif
<!-- choices-offer -->
@if ($featured_articles->count() > 0)
    <div id="latest-reviews" class="container-fluid pb-3 pb-sm-4 pb-lg-5 pt-3 pt-lg-4">
        <div class="overflow-hidden clearfix container pt-xl-5 pt-lg-4 pt-3  pb-3 text-center text-white">
            <div class="pt-xl-5 pt-lg-4 pt-3 pb-3">

                <h2 class="mb-lg-5 mb-4 pb-xl-5 pb-4">Latest Reviews &amp; Critiques</h2>

                <div class="mb-0 mb-sm-4 mb-lg-5 row">

                    <div class="center-slider owl-carousel owl-theme">
                        @foreach($featured_articles as $featured)
                            <div class="item">
                                <a href="{{ route('article.show', $featured->slug) }}">
                                    <div class="center-image position-relative">
                                        <img src="/storage/{{ $featured->thumbnail }}">
                                    </div>
                                    <div class="center-title align-items-center justify-content-center d-flex pr-5 pl-5">
                                        <img src="/storage/{{ $featured->logo }}">
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
<!-- latest-reviews -->
<div id="doesnt-stuff-around" class="container-fluid pb-0 pb-lg-4 pb-xl-5 pt-0 pt-lg-4 pt-xl-5">
    <div class="container pb-3 pb-lg-4 pb-xl-5 pt-3 pt-lg-4 pt-xl-5">
        <div class="first pb-3 pb-lg-4 pl-3 pl-lg-0 pr-3 pr-lg-0 pt-3 pt-lg-4 row">
            <div class="col-lg-6 ct-bg-3 ctm-rounded d-lg-block d-none first-column p-5 p-lg-0 shadow-lg">

            </div>
            <div class="col-lg-6 mb-0 mb-lg p-0 round-bottom-left round-bottom-right round-lg-bottom-left-0 round-lg-top-left-0 round-top-left round-top-right second-column text-white">
                <div class="bg-dark-solid d-flex mt-lg-5 mt-md-4 mt-3 mb-3 mb-md-4 mb-lg-5 5 pb-4 pb-lg-5 pt-4 pt-lg-5">
                    <div class="p-lg-5 p-4">
                        <h2 class="mb-3 mb-lg-4 mb-xl-5">Review Riot Doesn’t Stuff Around</h2>
                        <p class="mb-3 mb-lg-4 mb-xl-5">We researched and rate thousands of products from over 730 brands across 30+ different categories.</p>
                        <h4 class="mb-2 mb-3 mb-lg-4 mb-xl-5 pb-4">If something sucks, we’ll say so. We spot trends. We say it how it is.</h4>
                        <a href="#" class="btn-hover-transparent d-inline-block gen-btn text-white">learn more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- doesnt-stuff-arround -->
<div id="reviewed-this-month" class="container-fluid pt-lg-5 overflow-hidden">
    <div class="container border-bottom">
        <div class="row align-items-center text-center">
            <h6 class="mb-3 pb-2 pb-lg-4 w-100">BRANDS REVIEWED THIS MONTH</h6>

            <div class="logo-slider owl-carousel owl-theme pb-xl-5 pb-md-4 pb-3 pt-xl-5 pt-md-4 pt-3">
                <div class="item">
                    <a href="#link"><img src="{{ asset('assets/images/Harris-Farm.jpg') }}" class=""></a>
                </div>
                <div class="item">
                    <a href="#link"><img src="{{ asset('assets/images/kogan.jpg') }}" class=""></a>
                </div>
                <div class="item">
                    <a href="#link"><img src="{{ asset('assets/images/coco-republic.jpg') }}" class=""></a>
                </div>
                <div class="item">
                    <a href="#link"><img src="{{ asset('assets/images/Pet-Circle.jpg') }}" class=""></a>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- reviewed-this-month -->
<div id="review-for-us" class="container-fluid mt-2 pt-4 pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-xl-5 mt-xl-5 pb-xl-5 pl-0 pr-0 pt-0 pt-xl-5">
                <h3 class="mb-4 pt-2">Want to Review Something For Us?</h3>
                <p class="font-18 mb-4 mb-xl-5 mr-xl-3 pr-xl-5">The Review Riot team is stretched thin but with your help, we can review the world. The revolution starts today, we compare virtually everything. We’re 100% free and privately owned (not by a bank or an insurance company). We’re on your side!</p>
                <div class="pb-4 pt-3 pt-lg-4 pt-xl-5">
                    <div class="d-sm-inline-block mb-4">
                        <a href="/contact-us" class="d-block font-16 gen-btn mb-sm-0 mr-sm-4 text-white">ask a question</a>
                    </div>

                    <div class="d-sm-inline-block">
                        <a href="/about-us/#our-crew" class="d-block font-16 gen-btn gen-btn-transparent text-white">our crew</a>
                    </div>
                </div>

            </div>
            <div class="col-lg-6 people">
                <img src="{{ asset('assets/images/cta-footer-img.png') }}" class="d-block d-lg-none m-auto w-75">
            </div>
        </div>
    </div>
</div>
<!-- review-for-us -->

@endsection

@push('additionalJS')
<script src="{{ asset('assets/owlcarousel/owl.carousel.min.js') }}"></script>

<script type="text/javascript">

	jQuery(document).ready(function($){
	  $('.service-slider').owlCarousel({
		    loop:{{ count($article_categories) > 5 ? 'true':'false'}},
		    margin: 10,
		    nav:true,
		    dots: false,
		    autoplay:true,
		    autoplayTimeout:2000,
		    autoplayHoverPause:true,
		    responsive:{
		        0:{
		            items:1
		        },
		        480:{
		            items:2
		        },
		        767:{
		            items:3
		        },
		        991:{
		        	items:4
		        },
		        1200:{
		            items:6
		        }
		    }
		})
	});

	jQuery(document).ready(function($){
		$('.center-slider').owlCarousel({
		    center: true,
		    items:1,
		    autoplay: true,
		    autoplayTimeout:3000,
		    autoplayHoverPause:true,
		    loop:true,
		    margin:10,
		    nav:true,
		    responsive:{
		        0:{
		            items:1,
		            autoHeight:true
		        },
		        767:{
		            items:3
		        }
		    }
		});
	});

	jQuery(document).ready(function($){
	  $('.logo-slider').owlCarousel({
		    loop:true,
		    margin: 10,
		    nav: true,
		    autoplay:true,
		    autoplayTimeout:2500,
		    autoplayHoverPause:true,
		    stagePadding: 50,
		    dots: false,
		    responsive:{
		        0:{
		            items:1,
		            stagePadding: 0,
		        },
		        480:{
		            items:2,
		            stagePadding: 0,
		        },
		        767:{
		            items:3,
		          	nav: false,
		        },
		        991:{
		        	items:4
		        }
		    }
		})
	});

</script>
@endpush
