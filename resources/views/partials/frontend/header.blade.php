<header class="mb-4">
    <div class="container p-0">
        <nav class="navbar p-0">
            <div class=" secondary-menu pt-4 pb-4 text-center text-lg-right w-100">
                <div class="col-12 ">
                    {{-- <h6 class="d-inline-block mr-5"><a href="/about-us">ABOUT US</a></h6>
                    <h6 class="d-inline-block">WHAT WE DO</h6> --}}
                </div>
            </div>
            <div class="align-items-center col-lg mx-auto row w-100">
                <div class="col-lg-3 mb-3 mb-lg-0 pl-lg-0 text-center text-lg-left" style="">
                    <a href="{{ route('homepage') }}"><img id="logo" src="{{ asset('assets/images/review-riot-logo.png') }}" class="w-100" style=""></a>
                </div>
                <div class="col-lg-6 mb-3 mb-lg-0">
                    <form class="form-inline justify-content-center position-relative search-input" action="{{ route('search') }}" method="GET">
                        <input class="bg-light d-block form-control mr-lg-2 pb-4 pt-4 w-100" type="search" name="query" value="{{ request()->input('query') }}" placeholder="Search for a keyword,brand,etc....." aria-label="Search">
                        <button id="submit-btn" class="bg-transparent border-top-0 border-left-0 border-bottom-0 pr-4 pl-4 p-2 position-absolute border-right " type="submit"><i class="fas fa-search"></i></button>
                    </form>
                </div>
                <div class="col-lg-3 col-md-12 pr-0">
                    <div class="d-flex justify-content-center justify-content-lg-end">
                        <div class="d-flex float-lg-right" style="">
                            <div class="mb-2 text-center" style="">
                                <a href="{{ route('listing') }}">
                                    <img src="{{ asset('assets/images/icon-menu.png') }}" class="d-inline-block mr-sm-3 mr-2">
                                    <h5 class="d-inline-block mr-3">Categories</h5>
                                </a>
                            </div>
                            <div class="mb-2 pl-lg-3 text-center">
                                <a href="{{ route('contact') }}">
                                    <img src="{{ asset('assets/images/icon-headset.png') }}" class="d-inline-block mr-sm-3 mr-2">
                                    <h5 class="d-inline-block">Contact Us</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>