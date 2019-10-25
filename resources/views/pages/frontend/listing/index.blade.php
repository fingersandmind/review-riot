@extends('layouts.frontend.master')

@section('content')

<div class="container-fluid mb-5 listing-page">
    <div class="container listing-bg clearfix text-white ctm-rounded">
        <div class="row">
            <div class="col-xl-6">
                <h6 class="category-link mb-3 mb-lg-5"><a href="{{ route('homepage') }}" class="text-white">Home</a> <a href="#" class="text-white"><i class="fas ml-3 mr-3 fa-chevron-right"></i> Shopping </a><i class="fas ml-3 mr-3 fa-chevron-right"></i> <b>Food &amp; Beverages</b></h6>
                <h1 class="mb-3 mb-lg-5">Harris Farm <span class="ml-sm-5"><img src="{{ asset('assets/images/star-rating.png') }}"></span></h1>
                <div class="align-items-md-center align-items-start d-md-flex mb-0 mb-sm-4 mb-lg-5 row">
                    <div class="align-items-center col-3 col-md-2 mb-4 mb-md-0 pl-4 pr-0">
                        <img src="{{ asset('assets/images/avatar.png') }}" class="d-inline-block bordered-image">

                    </div>
                    <div class="align-items-center col-9 d-md-flex pl-0">
                        <div class="border-right d-block d-md-inline-block text-white"><span class="d-inline-block">Updated by</span> <span class="d-inline-block mr-3 mr-lg-4"><b class="ml-1">Smiles Davis</b></span></div>

                        <div class="d-block d-md-inline-block">
                            <p class="date ml-md-4 text-white">JUNE 3, 2019</p>
                        </div>
                    </div>
                </div>
                <p class="pr-sm-5 mr-sm-5 text-white mb-xl-0 mb-4">“Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. ”</p>
            </div>
            <div class="col-xl-6 ctm-rounded listing-featured-img">

            </div>
        </div>
    </div>

</div>

<div class="container-fluid mb-5 listing-page">
    <div class="container clearfix">
        <div class="row">
            <div class="col-lg-8 pr-lg-5 ">
                <h2 class="mb-xl-5 mb-lg-4 mb-3 heading-three"><span class="pb-3">Finding the right personal loan<span></span></span></h2>
                <h6 class="listing-mini-title pt-md-5 mb-4">THIS SECTION IS ABOUT:</h6>
                <div class="row mb-xl-5 mb-lg-4 mb-3">
                    <div class="col-md-6">
                        <p class="mb-3"><span class="mr-3"><img src="{{ asset('assets/images/icon-check.png') }}"></span> How a personal loan works</p>
                        <p class="mb-3"><span class="mr-3"><img src="{{ asset('assets/images/icon-check.png') }}"></span> How to choose a personal loan</p>
                        <p><span class="mr-3"><img src="{{ asset('assets/images/icon-check.png') }}"></span> What types of personal loans are available</p>
                    </div>
                    <div class="col-md-6">
                        <p class="mb-3"><span class="mr-3"><img src="{{ asset('assets/images/icon-check.png') }}"></span> How a personal loan works</p>
                        <p class="mb-3"><span class="mr-3"><img src="{{ asset('assets/images/icon-check.png') }}"></span> How to choose a personal loan</p>
                        <p><span class="mr-3"><img src="{{ asset('assets/images/icon-check.png') }}"></span> What types of personal loans are available</p>
                    </div>
                </div>
                <p class="mb-xl-5 mb-lg-4 mb-3 pt-md-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                <p class="mb-xl-5 mb-lg-4 mb-3">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                <h4 class="mb-xl-5 mb-lg-4 mb-3 pt-md-4">The types of personal loans that are available to you</h4>
                <p class="mb-xl-5 mb-lg-4 mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                <p class="mb-xl-5 mb-lg-4 mb-3">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                <h2 class="mb-xl-5 mb-lg-4 mb-3 pt-md-5"><span class="pb-3">Comparing features and costs<span></h2>
                <h6 class="listing-mini-title pt-md-5 mb-4">THIS SECTION IS ABOUT:</h6>
                <div class="row mb-xl-5 mb-lg-4 mb-3">
                    <div class="col-md-6">
                        <p class="mb-3"><span class="mr-3"><img src="{{ asset('assets/images/icon-check.png') }}"></span> How a personal loan works</p>
                        <p class="mb-3"><span class="mr-3"><img src="{{ asset('assets/images/icon-check.png') }}"></span> How to choose a personal loan</p>
                        <p><span class="mr-3"><img src="{{ asset('assets/images/icon-check.png') }}"></span> What types of personal loans are available</p>
                    </div>
                    <div class="col-md-6">
                        <p class="mb-3"><span class="mr-3"><img src="{{ asset('assets/images/icon-check.png') }}"></span> How a personal loan works</p>
                        <p class="mb-3"><span class="mr-3"><img src="{{ asset('assets/images/icon-check.png') }}"></span> How to choose a personal loan</p>
                        <p><span class="mr-3"><img src="{{ asset('assets/images/icon-check.png') }}"></span> What types of personal loans are available</p>
                    </div>
                </div>
                <p class="mb-xl-5 mb-lg-4 mb-3 pt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                <p class="mb-xl-5 mb-lg-4 mb-3">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                <h4 class="mb-xl-5 mb-lg-4 mb-3 pt-4">The types of personal loans that are available to you</h4>
                <p class="mb-xl-5 mb-lg-4 mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                <p class="mb-xl-5 mb-lg-4 mb-3">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>

                <!-- FAQ -->
                <h3 class="faq pt-4 mb-xl-5 mb-lg-4 mb-3">Frequently asked questions</h3>
                <div class="tab-pane faq-content mb-xl-5 mb-lg-4 mb-3 pb-4 pb-lg-5 " id="tab3" role="tabpanel" aria-labelledby="tab3">
                    <div class="accordion" id="accordion-tab-3">
                        <div class="card">
                            <div class="card-header" id="accordion-tab-3-heading-1">
                                <h5>
                                        <button class="btn btn-link text-dark text-left" type="button" data-toggle="collapse" data-target="#accordion-tab-3-content-1" aria-expanded="false" aria-controls="accordion-tab-3-content-1">What are the payment methods available?</button>
                                    </h5>
                            </div>
                            <div class="collapse" id="accordion-tab-3-content-1" aria-labelledby="accordion-tab-3-heading-1" data-parent="#accordion-tab-3">
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="accordion-tab-3-heading-2">
                                <h5>
                                        <button class="btn btn-link text-dark text-left" type="button" data-toggle="collapse" data-target="#accordion-tab-3-content-2" aria-expanded="false" aria-controls="accordion-tab-3-content-2">What can the lender do if you fail to repay a secured personal loan?</button>
                                    </h5>
                            </div>
                            <div class="collapse" id="accordion-tab-3-content-2" aria-labelledby="accordion-tab-3-heading-2" data-parent="#accordion-tab-3">
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="accordion-tab-3-heading-3">
                                <h5>
                                        <button class="btn btn-link text-dark text-left" type="button" data-toggle="collapse" data-target="#accordion-tab-3-content-3" aria-expanded="false" aria-controls="accordion-tab-3-content-3">What is the average interest rate on a personal loan?</button>
                                    </h5>
                            </div>
                            <div class="collapse" id="accordion-tab-3-content-3" aria-labelledby="accordion-tab-3-heading-3" data-parent="#accordion-tab-3">
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="author-profile ctm-rounded mb-xl-5 mb-4 p-4 p-md-5 text-center text-md-left text-white">
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
                <div class="mb-xl-5 mb-lg-4 mb-3 pb-xl-5 pb-xl-4 pb-3 pt-lg-4 write-review">
                    <p class="mb-3"><b>Want to write a review for us?</b></p>
                    <p class="font-16 mb-2"><span class="mr-3"><img src="{{ asset('assets/images/triangle.png') }}"></span>Email us at <u><a href="mailto:samplemail@reviewriot.com">samplemail@reviewriot.com</a></u></p>
                    <p class="font-16"><span class="mr-3"><img src="{{ asset('assets/images/triangle.png') }}"></span>Get in touch with our <u><a href="#">Review Riot Facebook page</a></u></p>
                </div>
                <div class="most-viewed mb-4 mb-lg-0">
                    <h3 class="pt-md-4 mb-xl-5 mb-lg-4 mb-3">Others also viewed these posts</h3>
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 mb-xl-5 mb-4  mb-lg-0">
                            <img src="{{ asset('assets/images/listing/popular-1.png') }}" class="mb-4 w-100">
                            <p class="pr-3 mb-md-4 mb-3"><b>Set Your Sights on Singapore with Flights from $335 Return on Singapore Airlines</b></p>
                            <h6>UPDATED BY &nbsp; SMILES DAVIS</h6>
                        </div>
                        <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
                            <img src="{{ asset('assets/images/listing/popular-2.png') }}" class="mb-4 w-100">
                            <p class="pr-3 mb-md-4 mb-3"><b>Set Your Sights on Singapore with Flights from $335 Return on Singapore Airlines</b></p>
                            <h6>UPDATED BY &nbsp; SMILES DAVIS</h6>
                        </div>
                        <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
                            <img src="{{ asset('assets/images/listing/popular-3.png') }}" class="mb-4 w-100">
                            <p class="pr-3 mb-md-4 mb-3"><b>Set Your Sights on Singapore with Flights from $335 Return on Singapore Airlines</b></p>
                            <h6>UPDATED BY &nbsp; SMILES DAVIS</h6>
                        </div>
                        <div class="col-lg-3 col-sm-6 mb-lg-5 mb-4 mb-lg-0">
                            <img src="{{ asset('assets/images/listing/popular-4.png') }}" class="mb-4 w-100">
                            <p class="pr-3 mb-md-4 mb-3"><b>Set Your Sights on Singapore with Flights from $335 Return on Singapore Airlines</b></p>
                            <h6>UPDATED BY &nbsp; SMILES DAVIS</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div id="side-bar" class="col-lg-4 listing-page p-0">
                <div class="related-posts p-4 p-md-5 mb-5 ctm-rounded">
                    <h4 class="mb-xl-5 mb-lg-4 mb-3">Related Posts</h4>
                    <div class="row mb-5">
                        <div class="col-sm-5">
                            <img src="{{ asset('assets/images/featured-image-1.png') }}" class="w-100 mb-sm-0 mb-5">
                        </div>
                        <div class="col-sm-7 p-0 pb-xl-3 pt-xl-3 pl-4">
                            <p class="mb-4"><b>Set Your Sights on Singapore with Flights from $335 Return on Singapore Airlines</b></p>
                            <h6>UPDATED BY &nbsp; SMILES DAVIS</h6>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-sm-5">
                            <img src="{{ asset('assets/images/featured-image-2.png') }}" class="w-100 mb-sm-0 mb-5">
                        </div>
                        <div class="col-sm-7 p-0 pb-xl-3 pt-xl-3 pl-4">
                            <p class="mb-4"><b>Set Your Sights on Singapore with Flights from $335 Return on Singapore Airlines</b></p>
                            <h6>UPDATED BY &nbsp; SMILES DAVIS</h6>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-sm-5">
                            <img src="{{ asset('assets/images/featured-image-1.png') }}" class="w-100 mb-sm-0 mb-5">
                        </div>
                        <div class="col-sm-7 p-0 pb-xl-3 pt-xl-3 pl-4">
                            <p class="mb-4"><b>Set Your Sights on Singapore with Flights from $335 Return on Singapore Airlines</b></p>
                            <h6>UPDATED BY &nbsp; SMILES DAVIS</h6>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-sm-5">
                            <img src="{{ asset('assets/images/featured-image-2.png') }}" class="w-100 mb-sm-0 mb-5">
                        </div>
                        <div class="col-sm-7 p-0 pb-xl-3 pt-xl-3 pl-4">
                            <p class="mb-4"><b>Set Your Sights on Singapore with Flights from $335 Return on Singapore Airlines</b></p>
                            <h6>UPDATED BY &nbsp; SMILES DAVIS</h6>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-sm-5">
                            <img src="{{ asset('assets/images/featured-image-1.png') }}" class="w-100 mb-sm-0 mb-5">
                        </div>
                        <div class="col-sm-7 p-0 pb-xl-3 pt-xl-3 pl-4">
                            <p class="mb-4"><b>Set Your Sights on Singapore with Flights from $335 Return on Singapore Airlines</b></p>
                            <h6>UPDATED BY &nbsp; SMILES DAVIS</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-5">
                            <img src="{{ asset('assets/images/featured-image-2.png') }}" class="w-100 mb-sm-0 mb-5">
                        </div>
                        <div class="col-sm-7 p-0 pb-xl-3 pt-xl-3 pl-4">
                            <p class="mb-4"><b>Set Your Sights on Singapore with Flights from $335 Return on Singapore Airlines</b></p>
                            <h6>UPDATED BY &nbsp; SMILES DAVIS</h6>
                        </div>
                    </div>
                </div>
                <div id="side-bar-form" class="pb-5 pt-5 pl-4 pr-4 ctm-rounded text-white text-center">
                    <h4 class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </h4>
                    <img src="{{ asset('assets/images/email.png') }}" class="mb-5 w-100">

                    <form class="mb-4" action="{{ route('subscribe') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" id="inputEmail" name="email" placeholder="Enter your email address...">
                        </div>
                        <button type="submit" class="btn w-100 bg-white gen-btn text-dark" value="subscribe">REACH OUT ASAP!</button>
                    </form>

                    <p class="text-white p-3">By signing up, you consent to Review Riot’s <u><a href="#" class="text-white">Privacy & Cookies Policy,</a></u>
                        <u><a href="#" class="text-white">Terms of Use</a></u> and <u><a href="#" class="text-white">Disclaimer & Privacy Policy</a></u>.</p>
                </div>
            </div>
            <!-- SIDE BAR -->
        </div>
    </div>
</div>
@endsection