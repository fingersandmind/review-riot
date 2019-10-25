@extends('layouts.frontend.master')

@push('additionalCSS')
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@endpush

@section('content')

<!-- Contact Banner -->

<div class="container-fluid pt-3 pb-0 ">
    <div class="contact-banner container pb-3 pb-lg-4 pb-md-4 pt-1 text-light">
        <div class="d-flex m-auto mw-722 pb-3 pb-md-4 pt-3 pt-md-5 row">
            <div class="col-lg-12 pb-3 pb-lg-5 pt-3 pt-md-3">
                <h1 class="mb-2 mb-lg-5 mb-mb-4 pb-md-3 text-center">How can we help?</h1>
                <form role="search" method="get" class="" action="#">
                    <div class="clearfix d-flex search-form">
                        <input type="submit" class="search-submit">

                        <input type="search" name="q" placeholder="Search for anything...">
                    </div>
                </form>
            </div>
        </div>
        <div class="d-flex  mw-722 pb-3 pb-md-5  m-auto row">
            <div class="font-montserrat mb-3 mb-sm-0 col-12 col-md-6 pb-3">

                <div class="d-flex mb-2 pb-1">
                    <div>
                        <i class="material-icons">phone</i>
                    </div>
                    <div class="pl-3">
                        <a class="text-white" href="tel:+ 123 456 789 00">+ 123 456 789 00</a>
                    </div>
                </div>
                <div class="d-flex">
                    <div style="
							">
                        <i class="material-icons">place</i>
                    </div>
                    <div class="pl-3">
                        <a class="text-white" href="https://goo.gl/maps/swnGoJLejqGmmvhp8" target="_blank">Review Riot - British Virgin Islands Level 1,
								Palm Grove House, Wickham’s Cay 1,
							Road Town, Australia</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 pb-3">
                <a href="#" class="btn-transparent btn-white headset-button m-auto mr-lg-0 mt-0 mt-sm-3" style="
					"><img src="{{ asset('assets/images/white-headet.png') }}" class="headset-white"> LIVE CHAT</a>
            </div>
        </div>
    </div>
</div>

<!-- Contact Section 2 -->
<div class="contact-services container-fluid pb-3 pt-2">
    <div class="container pb-md-3  pt-3">
        <div class="d-flex pb-lg-5 pt-0 pt-lg-5 row">
            <div class="col-lg-12 pb-3 pb-md-4 pt-3 pt-md-3">
                <h2 class="text-center heading-three">What do you need help with?</h2>
            </div>
        </div>

        <div class="row">

            <div class="d-flex col-lg-4 col-md-6 col-12 mb-4 mb-md-5 service-check text-center text-md-left">
                <div class="pb-lg-5 pb-4 pl-4 position-relative pr-4 pt-4 pt-lg-5 service-container">
                    <a class="service-link" href="#"></a>

                    <i class="fa fa-check"></i>
                    <p class="font-22 font-montserrat font-weight-bold mb-0 mb-md-3">I have a general comment or question</p>

                    <p class="font-18 pt-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim.</p>
                </div>
            </div>

            <div class="d-flex col-lg-4 col-md-6 col-12 mb-4 mb-md-5 service-check text-center text-md-left">
                <div class="pb-lg-5 pb-4 pl-4 position-relative pr-4 pt-4 pt-lg-5 service-container">
                    <a class="service-link" href="#"></a>

                    <i class="fa fa-check"></i>
                    <p class="font-22 font-montserrat font-weight-bold mb-0 mb-md-3">I have feedback about the website</p>

                    <p class="font-18 pt-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim.</p>
                </div>
            </div>

            <div class="d-flex col-lg-4 col-md-6 col-12 mb-4 mb-md-5 service-check text-center text-md-left">
                <div class="pb-lg-5 pb-4 pl-4 position-relative pr-4 pt-4 pt-lg-5 service-container">
                    <a class="service-link" href="#"></a>

                    <i class="fa fa-check"></i>
                    <p class="font-22 font-montserrat font-weight-bold mb-0 mb-md-3">I have a question about a product</p>

                    <p class="font-18 pt-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim.</p>
                </div>
            </div>

            <div class="d-flex col-lg-4 col-md-6 col-12 mb-4 mb-md-5 service-check text-center text-md-left">
                <div class="pb-lg-5 pb-4 pl-4 position-relative pr-4 pt-4 pt-lg-5 service-container">
                    <a class="service-link" href="#"></a>

                    <i class="fa fa-check"></i>
                    <p class="font-22 font-montserrat font-weight-bold mb-0 mb-md-3">I want to list my product or service</p>

                    <p class="font-18 pt-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim.</p>
                </div>
            </div>

            <div class="d-flex col-lg-4 col-md-6 col-12 mb-4 mb-md-5 service-check text-center text-md-left">
                <div class="pb-lg-5 pb-4 pl-4 position-relative pr-4 pt-4 pt-lg-5 service-container">
                    <a class="service-link" href="#"></a>

                    <i class="fa fa-check"></i>
                    <p class="font-22 font-montserrat font-weight-bold mb-0 mb-md-3">I want to work with/for Review Riot</p>

                    <p class="font-18 pt-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim.</p>
                </div>
            </div>

            <div class="d-flex col-lg-4 col-md-6 col-12 mb-sm-4 mb-md-5 service-check text-center text-md-left" style="
				">
                <div class="pb-lg-5 pb-4 pl-4 position-relative pr-4 pt-4 pt-lg-5 service-container">
                    <a class="service-link" href="#"></a>

                    <i class="fa fa-check"></i>
                    <p class="font-22 font-montserrat font-weight-bold mb-0 mb-md-3">Others</p>

                    <p class="font-18 pt-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim.</p>
                </div>
            </div>

        </div>

        <div class="row d-flex pb-3 pb-md-5 pt-3 pt-lg-5 mw-1280">
            <div class="col-lg-12 pb-0 pb-md-5 pt-3 pt-md-3">
                <h2 class="heading-three mb-lg-5 md-0 pb-4 text-center">What would you like to tell us?</h2>
                <form>
                    <textarea placeholder="Input your message here..." class="mb-3 mb-md-4 text-area-class"></textarea>
                    <div class="btn-area mt-lg-5 pt-1 text-center" style="
					">
                        <input type="submit" class="d-block font-16 gen-btn lineheight60 m-auto mw-220 p-0 text-white" value="REACH OUT ASAP!">
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>

@endsection