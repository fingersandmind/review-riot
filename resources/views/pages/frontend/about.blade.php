@extends('layouts.frontend.master')
@push('additionalCSS')
<!--Owl Slider-->
<link rel="stylesheet" href="{{ asset('assets/owlcarousel/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/owlcarousel/owl.theme.default.min.css') }}">
@endpush

@section('content')
<!-- ABOUT BANNER -->
<div class="about-banner container-fluid">
    <div class="container">
        <div class="row d-flex">
            <div class="col-lg-6 col-md-12 position-relative pr-3 pr-lg-5">
                <div class="spacer mb-lg-5 mb-md-4 mb-sm-3 pb-3 pb-lg-5 pb-md-4 ">
                </div>
                <h4 class="font-tragicmarker font-weight-normal text-center text-md-left text-uppercase">About Review Riot</h4>
                <div class="spacer mb-lg-5 mb-md-4 mb-sm-3 pb-3 ">
                </div>

                <h1 class="mb-4 pr-0 pr-lg-5 text-center text-md-left">Lorem ipsum, Dolor sit Amet, Nibh Adispicing</h1>

                <div class="d-lg-block d-none mt-3 mt-lg-5 mt-md-4 pr-md-1 pt-3 pt-lg-5 pt-md-4 scroll-down second-column">

                    <div class="d-flex mt-3 mt-md-4 pr-md-1 pt-3 pt-md-4">
                        <div class="col-lg-3">
                            <a href="#our-mission"><img src="{{ asset('assets/images/about-us/arrow-down-green.png') }}" class=""></a>
                        </div>
                        <div class="ml-4">
                            <h5 class="text-uppercase"><a href="#our-mission" class="text-dark">Scroll down to find out more </a></h5>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-6 col-md-12 feature-img font-tragicmarker">

                <img src="{{ asset('assets/images/about-us/about-banner.jpg') }}" class="w-100">

            </div>
        </div>
    </div>
</div>

<!-- OUR MISSIOIN SEC -->
<div id="our-mission" class="container-fluid pt-3 pt-md-4 pt-lg-5 pb-3  ">
    <div class="container  pt-3 pt-md-4 pt-lg-5">

        <div class="d-flex pb-0 pb-sm-3 pb-md-4 pb-lg-5 pt-0 pt-sm-3 pt-md-4 pt-lg-5 row">
            <div class="col-lg-12 pt-0 pt-md-3 pt-md-3">
                <ul class="nav nav-tabs font-18 font-color font-montserrat font-weight-bold link-green pl-0 text-center text-lg-left" style="">

                    <li class="d-block d-md-inline-block mb-2">
                        <a data-toggle="tab" href="#about-us" class="active mb-2 pb-0 pb-md-1 pb-sm-1">About Us</a>
                    </li>
                    <li class="d-block d-md-inline-block  mb-2 ml-lg-4 ml-md-3 ml-sm-2 pl-0 pl-md-2 pl-lg-5">
                        <a data-toggle="tab" href="#our-crew" class="mb-2 pb-0 pb-md-1 pb-sm-1">Our Crew</a>
                    </li>
                    <li class="d-block d-md-inline-block  mb-2 ml-lg-4 ml-md-3 ml-sm-2 pl-0 pl-md-2 pl-lg-5">
                        <a data-toggle="tab" href="#media-room" class="mb-2 pb-0 pb-md-1 pb-sm-1">Media Room</a>
                    </li>
                    <li class="d-block d-md-inline-block  mb-2 ml-lg-4 ml-md-3 ml-sm-2 pl-0 pl-md-2 pl-lg-5">
                        <a data-toggle="tab" href="#careers" class="mb-2 pb-0 pb-md-1 pb-sm-1">Careers</a>
                    </li>
                    <li class="d-block d-md-inline-block  mb-2 ml-lg-4 ml-md-3 ml-sm-2 pl-0 pl-md-2 pl-lg-5">
                        <a data-toggle="tab" href="#contact-tab" class="mb-2 pb-0 pb-md-1 pb-sm-1">Contact Us</a>
                    </li>
                    <li class="d-block d-md-inline-block  mb-2 ml-lg-4 ml-md-3 ml-sm-2 pl-0 pl-md-2 pl-lg-5">
                        <a data-toggle="tab" href="#partner-us" class="mb-2 pb-0 pb-md-1 pb-sm-1">Partner with Us</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="tab-content">
            <!-- ABOUT TAB -->
            <div id="about-us" class="tab-pane fade in show active">
                <div class="d-flex pb-3 pb-lg-5 pt-3 pt-md-4 row">
                    <div class="col-lg-3 heading-two48 pb-0 pb-lg-5 pt-0">
                        <div class="d-lg-block d-none mt-0 mt-lg-5 mt-md-4 pt-3 pt-md-5 spacer"></div>
                        <h2 class="mb-0mb-md-3 text-center text-lg-left">Our Mission</h2>
                        <div class="d-lg-block d-none mr-n4 text-right">
                            <img src="{{ asset('assets/images/about-us/curl-right.png') }}" class="">
                        </div>

                    </div>
                    <div class="col-lg-9 heading-two48 pb-3 pb-md-5 pl-lg-5 pl-md-4 pl-sm-0 pt-3 pt-md-3">
                        <div class="bg-dark-2 ct-box font-22 ml-lg-5 ml-sm-0 mw-977 text-light">
                            <p class="mb-4 mb-md-2 pb-md-3 pb-lg-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea com modo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.

                            </p>
                            <p class="pb-3 pb-lg-2 mb-4 mb-md-5">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia dese runt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi</p>

                            <div class="text-center text-lg-left"><a href="#" class="btn-hover-transparent font-16 gen-btn text-white">Be one of us</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Our Crew tab  -->
            <div id="our-crew" class="tab-pane fade">
                <div class="d-flex pb-3 pb-lg-5 pt-3 pt-md-4 row">
                    <div class="col-lg-3 heading-two48 pb-0 pb-lg-5 pt-0">
                        <div class="d-lg-block d-none mt-0 mt-lg-5 mt-md-4 pt-3 pt-md-5 spacer"></div>
                        <h2 class="mb-0mb-md-3 text-center text-lg-left">Our Crew</h2>
                        <div class="d-lg-block d-none mr-n4 text-right">
                            <img src="{{ asset('assets/images/about-us/curl-right.png') }}" class="">
                        </div>

                    </div>
                    <div class="col-lg-9 heading-two48 pb-3 pb-md-5 pl-lg-5 pl-md-4 pl-sm-0 pt-3 pt-md-3">
                        <div class="bg-dark-2 ct-box font-22 ml-lg-5 ml-sm-0 mw-977 text-light">
                            <p class="mb-4 mb-md-2 pb-md-3 pb-lg-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea com modo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.

                            </p>
                            <p class="pb-3 pb-lg-2 mb-4 mb-md-5">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia dese runt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi</p>

                            <div class="text-center text-lg-left"><a href="#" class="btn-hover-transparent font-16 gen-btn text-white">Be one of us</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Media room tab -->
            <div id="media-room" class="tab-pane fade">
                <div class="d-flex pb-3 pb-lg-5 pt-3 pt-md-4 row">
                    <div class="col-lg-3 heading-two48 pb-0 pb-lg-5 pt-0">
                        <div class="d-lg-block d-none mt-0 mt-lg-5 mt-md-4 pt-3 pt-md-5 spacer"></div>
                        <h2 class="mb-0mb-md-3 text-center text-lg-left">Media Room</h2>
                        <div class="d-lg-block d-none mr-n4 text-right">
                            <img src="{{ asset('assets/images/about-us/curl-right.png') }}" class="">
                        </div>

                    </div>
                    <div class="col-lg-9 heading-two48 pb-3 pb-md-5 pl-lg-5 pl-md-4 pl-sm-0 pt-3 pt-md-3">
                        <div class="bg-dark-2 ct-box font-22 ml-lg-5 ml-sm-0 mw-977 text-light">
                            <p class="mb-4 mb-md-2 pb-md-3 pb-lg-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea com modo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.

                            </p>
                            <p class="pb-3 pb-lg-2 mb-4 mb-md-5">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia dese runt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi</p>

                            <div class="text-center text-lg-left"><a href="#" class="btn-hover-transparent font-16 gen-btn text-white">Be one of us</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Careers tab -->
            <div id="careers" class="tab-pane fade">
                <div class="d-flex pb-3 pb-lg-5 pt-3 pt-md-4 row">
                    <div class="col-lg-3 heading-two48 pb-0 pb-lg-5 pt-0">
                        <div class="d-lg-block d-none mt-0 mt-lg-5 mt-md-4 pt-3 pt-md-5 spacer"></div>
                        <h2 class="mb-0mb-md-3 text-center text-lg-left">Careers</h2>
                        <div class="d-lg-block d-none mr-n4 text-right">
                            <img src="{{ asset('assets/images/about-us/curl-right.png') }}" class="">
                        </div>

                    </div>
                    <div class="col-lg-9 heading-two48 pb-3 pb-md-5 pl-lg-5 pl-md-4 pl-sm-0 pt-3 pt-md-3">
                        <div class="bg-dark-2 ct-box font-22 ml-lg-5 ml-sm-0 mw-977 text-light">
                            <p class="mb-4 mb-md-2 pb-md-3 pb-lg-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea com modo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.

                            </p>
                            <p class="pb-3 pb-lg-2 mb-4 mb-md-5">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia dese runt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi</p>

                            <div class="text-center text-lg-left"><a href="#" class="btn-hover-transparent font-16 gen-btn text-white">Be one of us</a></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Us Tab -->
            <div id="contact-tab" class="tab-pane fade">
                <div class="d-flex pb-3 pb-lg-5 pt-3 pt-md-4 row">
                    <div class="col-lg-3 heading-two48 pb-0 pb-lg-5 pt-0">
                        <div class="d-lg-block d-none mt-0 mt-lg-5 mt-md-4 pt-3 pt-md-5 spacer"></div>
                        <h2 class="mb-0mb-md-3 text-center text-lg-left">Contact Us</h2>
                        <div class="d-lg-block d-none mr-n4 text-right">
                            <img src="{{ asset('assets/images/about-us/curl-right.png') }}" class="">
                        </div>

                    </div>
                    <div class="col-lg-9 heading-two48 pb-3 pb-md-5 pl-lg-5 pl-md-4 pl-sm-0 pt-3 pt-md-3">
                        <div class="bg-dark-2 ct-box font-22 ml-lg-5 ml-sm-0 mw-977 text-light">
                            <p class="mb-4 mb-md-2 pb-md-3 pb-lg-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea com modo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.

                            </p>
                            <p class="pb-3 pb-lg-2 mb-4 mb-md-5">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia dese runt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi</p>

                            <div class="text-center text-lg-left"><a href="#" class="btn-hover-transparent font-16 gen-btn text-white">Be one of us</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Partner with us -->
            <div id="partner-us" class="tab-pane fade">
                <div class="d-flex pb-3 pb-lg-5 pt-3 pt-md-4 row">
                    <div class="col-lg-3 heading-two48 pb-0 pb-lg-5 pt-0">
                        <div class="d-lg-block d-none mt-0 mt-lg-5 mt-md-4 pt-3 pt-md-5 spacer"></div>
                        <h2 class="mb-0mb-md-3 text-center text-lg-left">Partner with Us</h2>
                        <div class="d-lg-block d-none mr-n4 text-right">
                            <img src="{{ asset('assets/images/about-us/curl-right.png') }}" class="">
                        </div>

                    </div>
                    <div class="col-lg-9 heading-two48 pb-3 pb-md-5 pl-lg-5 pl-md-4 pl-sm-0 pt-3 pt-md-3">
                        <div class="bg-dark-2 ct-box font-22 ml-lg-5 ml-sm-0 mw-977 text-light">
                            <p class="mb-4 mb-md-2 pb-md-3 pb-lg-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea com modo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.

                            </p>
                            <p class="pb-3 pb-lg-2 mb-4 mb-md-5">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia dese runt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi</p>

                            <div class="text-center text-lg-left"><a href="#" class="btn-hover-transparent font-16 gen-btn text-white">Be one of us</a></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="m-auto mw-important position-relative row">
            <div class="d-lg-block d-none important position-absolute">
                <h4 class="color-green font-tragicmarker font-weight-normal ">Important!</h4><img src="{{ asset('assets/images/about-us/left-green.png') }}" class="">
            </div>
        </div>

        <div class="d-flex m-auto mw-important-1170 pb-md-3 pb-lg-5 pt-md-3 pt-lg-5 row" style="
		">

            <div class="col-lg-12 position-relative pt-md-3 pt-md-3">

                <h3 class="l-height-1-5 text-center" style="
			">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</h3>
            </div>
        </div>
    </div>
</div>

<!-- SERVICES -->
<div class="container-fluid pb-3 pb-lg-5 pb-md-4 pt-3 pt-lg-5 pt-md-4 text-light">
    <div class="container pb-3 pb-md-5 pb-sm-4 pt-3 pt-lg-5 pt-md-4 services-banner" style="
	border-color: #fff;
	">
        <div class="row d-flex pb-3 pb-md-4 pt-3 pt-md-5 ">
            <div class="col-lg-12 pb-lg-5 pt-md-3">
                <h4 class="text-center">Lorem Ipsum Proin Gravida</h4>
            </div>
        </div>

        <div class="d-flex mw-1280 pb-3 pb-md-5 pt-0 pt-lg-5 row">
            <div class="border-op50 border-right col-6 col-lg-3 pb-3 pb-md-5 pt-4 pt-md-4 text-center">
                <img src="{{ asset('assets/images/about-us/service1.png') }}" class="mb-2 mb-md-4">
                <p class="font-weight-bold text-uppercase">Item 1</p>
            </div>
            <div class="border-op50 border-right col-6 col-lg-3 pb-3 pb-md-5 pt-4 pt-md-4 text-center">
                <img src="{{ asset('assets/images/about-us/service1.png') }}" class="mb-2 mb-md-4">
                <p class="font-weight-bold text-uppercase">Item 1</p>
            </div>
            <div class="border-op50 border-right col-6 col-lg-3 pb-3 pb-md-5 pt-4 pt-md-4 text-center">
                <img src="{{ asset('assets/images/about-us/service1.png') }}" class="mb-2 mb-md-4">
                <p class="font-weight-bold text-uppercase">Item 1</p>
            </div>
            <div class="border-op50 border-right col-lg-3 col-6 pb-3 pb-md-5 pt-4 pt-md-4 text-center">
                <img src="{{ asset('assets/images/about-us/service1.png') }}" class="mb-2 mb-md-4">
                <p class="font-weight-bold text-uppercase">Item 1</p>
            </div>
        </div>

        <div class="col-lg-12 d-lg-block d-none pb-3 pb-md-5 pt-3 pt-md-3">

        </div>

    </div>
</div>

<!-- SECTION -->
<div class="container-fluid pt-3 pt-md-4 pt-lg-5 pb-3 pb-md-4 pb-lg-5 ">
    <div class="container pb-3">
        <div class="d-flex m-auto mw-really position-relative pt-lg-5 row">
            <h4 class="color-green d-lg-block d-none font-86 font-tragicmarker font-weight-normal position-absolute really">Really!</h4>
        </div>
        <div class="d-flex m-auto mw-1170 row">
            <div class="col-lg-12 font-22 pb-3 pb-md-5 position-relative pt-md-3 text-center">

                <h3 class="l-height-1-5 mb-lg-5 mb-3 mb-md-4 md-3" style="
				">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</h3>

                <p class="mb-md-4 pb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea com modo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                <p class="">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia dese runt mollit anim id est labo rum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi.</p>
            </div>
        </div>
    </div>
</div>

<!-- reviewed-this-month -->
<div id="reviewed-this-month" class="container-fluid pt-lg-5 overflow-hidden">
    <div class="container border-bottom">
        <div class="row align-items-center text-center">
            <h6 class="mb-3 pb-2 pb-lg-4 w-100">WE’VE WORKED WITH</h6>

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

<div id="cta-getTouch" class="container-fluid pt-3 pt-md-4 pt-lg-5">
    <div class="container pt-3">
        <div class="m-auto ct-row-get row">
            <div class="col-lg-12 font-18 text-center">
                <h2 class="mb-2 mb-lg-4 mb-md-3 pb-2">Let’s Get in Touch!</h2>
                <p class="mb-3 mb-lg-4 mb-md-0 mb-md-3 mb-sm-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                <ul class="mb-0 pl-0 pt-lg-5 pt-md-4 pt-sm-3 social-icon-list">
                    <li class="d-inline-block mr-2 mr-md-4 mr-sm-3 pr-lg-5 pr-md-4 pr-3">
                        <a href="#">
                            <i class="fab fa-facebook-f" style=""></i>
                        </a>
                    </li>

                    <li class="d-inline-block mr-md-4 mr-sm-3 mr-2 pr-lg-5 pr-md-4 pr-3">
                        <a href="#">
                            <i class="fab fa-twitter" style=""></i>
                        </a>
                    </li>

                    <li class="d-inline-block mr-md-4 mr-sm-3 mr-2 pr-lg-5 pr-md-4 pr-3">
                        <a href="#">
                            <i class="fab fa-instagram" style="/* font-size:24px */"></i>
                        </a>
                    </li>

                    <li class="d-inline-block mr-md-4 mr-sm-3 mr-2 pr-lg-5 pr-md-4 pr-3">
                        <a href="#">
                            <i class="fab fa-linkedin" style="/* font-size:24px */"></i>
                        </a>
                    </li>

                    <li class="d-inline-block">
                        <a href="#">
                            <i class="fab fa-youtube" style="/* font-size:24px */"></i>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="row d-flex pt-3 pt-md-5 ">
            <div class="col-lg-12  pt-3 pt-md-3 text-center">
                <img src="{{ asset('assets/images/about-us/shutter-img.png') }}" class="w-75">
            </div>
        </div>
    </div>
</div>

@endsection


@push('additionalJS')

<!-- OWL SLIDER -->
<script src="{{ asset('assets/owlcarousel/owl.carousel.min.js') }}"></script>

<script type="text/javascript">

	jQuery(document).ready(function($){
	  $('.logo-slider').owlCarousel({
		    loop:true,
		    margin: 10,
		    nav: false,
		    autoplay:true,
		    autoplayTimeout:2500,
		    autoplayHoverPause:true,
		    stagePadding: 50,
		    dots: false,
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
		        }
		    }
		})
	});

</script>
@endpush