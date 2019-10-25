<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:700,400|Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"; integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/style.css') }}">
    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap-form-helpers.min.css"; ntegrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"> -->
    <title></title>
</head>
<body>
    <header class="mb-4">
        <div class="container p-0">
            <nav class="navbar p-0">
                <div class="secondary-menu pt-4 pb-4 text-right w-100">
                    <div class="col-12">
                        <h6 class="d-inline-block mr-5">ABOUT US</h6>
                        <h6 class="d-inline-block">WHAT WE DO</h6>
                    </div>
                </div>
                <div class="row w-100 mx-auto align-items-center">
                    <div class="col-md-3 col-sm-8 col-11 mx-md-0 mx-auto p-0 mb-md-0 mb-4">
                        <img src="{{ asset('assets/images/logo.png') }}" class="w-100">
                    </div>
                    <div class="col-xl-6 col-md-8">
                        <form class="form-inline justify-content-center">
                            <input class="form-control mr-sm-2 w-75 pb-4 pt-4 bg-light" type="search" placeholder="Search for a keyword,brand,etc....." aria-label="Search">
                            <button id="submit-btn" class="bg-transparent border-top-0 border-left-0 border-bottom-0 pr-4 pl-4 p-2 position-absolute border-right" type="submit"><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                    <div class="col-lg-12 col-xl-3 text-right p-xl-0 pt-5 pb-4">
                        <div class="row p-xl-0 pl-lg-5">
                            <div class="col-6  d-flex align-items-center">
                                <img src="{{ asset('assets/images/icon-menu.png') }}" class="d-inline-block mr-sm-3 mr-2">
                                <h5 class="d-inline-block mr-3">Categories</h5>
                            </div>
                            <div class="col-6 d-flex align-items-center pr-1">
                                <img src="{{ asset('assets/images/icon-headset.png') }}" class="d-inline-block mr-sm-3 mr-2">
                                <h5 class="d-inline-block">Contact Us</h5>
                            </div>
                        </div>
                    </div>
                </div>  
            </nav>
        </div>
    </header>

    <div id="home-banner" class="section-regular container-fluid background">
        <div class="container home-background clearfix ctm-rounded">
            <div class="col-lg-5 mb-5 p-0">
                <h1 class="text-white">We Review Stuff Thoroughly So You Don’t Get Ripped Off</h1>
            </div>
            <div class="col-lg-5 bg-white text-black p-4 ctm-rounded">
                <div class="row">
                    <div class="col-md-7 pr-0 pl-md-3 pl-0 featured-review pb-4">
                        <h6 class="mb-4">FEATURED REVIEW</h6>
                        <h4>Online Retailer of the Year</h4>
                        <p class="mb-5">Amazing clothes and so bloody cheap!</p>
                        <a href="#" class="gen-btn text-white">read about Jane Lu’s Showpo</a>
                    </div>
                    <div class="col-md-5 d-flex align-items-center pl-md-5">
                        <img src="{{ asset('assets/images/showpo.png') }}" class="mx-auto">
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- home-banner -->
    <div id="why-us"class="container-fluid">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-4 border-right pt-4 pb-4">
                    <div class="row">
                        <div class="col-lg-4 p-0 text-center">
                            <img src="{{ asset('assets/images/number-1.png') }}">
                        </div>
                        <div class="col-lg-8 p-0 d-flex align-items-center">
                            <p class="mx-lg-0 mx-auto">We’re crazy shoppers & consumers</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 border-right pt-4 pb-4">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-4 p-0 text-center">
                            <img src="{{ asset('assets/images/number-2.png') }}">
                        </div>
                        <div class="col-lg-8 p-0">
                            <h5 class="mb-3">Raw Like Beef Carpaccio</h5>
                            <p class="pr-5">If it sucks, we’ll say so. If it’s awesome, then we’ll say it too</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 pt-4 pb-4">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-4 p-0 text-center">
                            <img src="{{ asset('assets/images/number-3.png') }}">
                        </div>
                        <div class="col-lg-8 p-0">
                            <h5 class="mb-3">We’ll Stop You From Making A Shitty Decision</h5>
                            <p>We’ll call out expensive rip-offs so you don’t get stung</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- why-us -->
    <div id="good-shopping-sites" class="container-fluid mb-5">
        <div class="container clearfix background text-white">
            <div class="row">
                <div class="col-lg-8 first-column ctm-rounded mb-lg-0 mb-4">
                    <h2 class="mb-4">Online Shopping <br>Sites That Don’t Suck</h2>
                    <h4 class="mb-5">These stores are actually OK</h4>
                    <a href="#" class="gen-btn text-white">let's go</a>
                </div> <!-- first-column -->
                <div class="col-lg-4 second-column ctm-rounded">
                    <h4 class="mb-5">If you go to David Jones,<br>No One will Serve You</h4>
                    <h5 class="mb-lg-5 pb-5">“You’ll stand around like a schmock!” </h5>
                    <a href="#" class="gen-btn text-white mb-lg-0 mb-5">Read our experience</a>
                </div>
            </div>
        </div>
    </div> <!-- good-shopping-sites -->
    <div id="choices-offer" class="container-fluid mb-5">
        <div class="container pl-5 pr-5 clearfix">
            <div class="row">
                <div class="col-lg-4 col-xl-2 col-md-4 col-sm-6 border ctm-secondary pt-5 pb-5 text-center">
                    <img src="{{ asset('assets/images/phone.png') }}" class="mb-4">
                    <h6>MOBILE PLANS</h6>
                </div>
                <div class="col-lg-4 col-xl-2 col-md-4 col-sm-6 border ctm-secondary pt-5 pb-5 text-center">
                    <img src="{{ asset('assets/images/personal-loans.png') }}" class="mb-4">
                    <h6>PERSONAL LOANS</h6>
                </div>
                <div class="col-lg-4 col-xl-2 border  col-md-4 col-sm-6 ctm-secondary pt-5 pb-5 text-center">
                    <img src="{{ asset('assets/images/bitcoin.png') }}" class="mb-4">
                    <h6>CRYPTOCURRENCY</h6>
                </div>
                <div class="col-lg-4 col-xl-2 col-md-4 border col-sm-6 ctm-secondary pt-5 pb-5 text-center">
                    <img src="{{ asset('assets/images/airplane.png') }}" class="mb-4">
                    <h6 class="mt-3">TRAVEL DEALS</h6>
                </div>
                <div class="col-lg-4 col-xl-2 col-md-4 border col-sm-6 ctm-secondary pt-5 pb-5 text-center">
                    <img src="{{ asset('assets/images/travel-insurance.png"') }}" class="mb-4">
                    <h6>TRAVEL INSURANCE</h6>
                </div>
                <div class="col-lg-4 col-xl-2 col-md-4 border col-sm-6 ctm-secondary pt-5 pb-5 text-center">
                    <img src="{{ asset('assets/images/piggy-bank.png') }}" class="mb-4">
                    <h6>HIGH INTEREST SAVINGS</h6>
                </div>
            </div>
        </div>
    </div> <!-- choices-offer -->
    <div id="latest-reviews" class="container-fluid">
        <div class="container clearfix text-white text-center clearfix">
            <h2 class="mb-md-5 pb-md-5">Latest Reviews & Critiques</h2>
            <div class="row pt-5">
                <div class="col-md-4 p-md-0 pb-5">
                    <img src="{{ asset('assets/images/cocorepublic-1.png') }}" class="w-100">
                </div>
                <div class="col-md-4 active p-md-0 pb-5">
                    <img src="{{ asset('assets/images/coco-republic-2.png') }}" class="w-100">
                </div>
                <div class="col-md-4 p-md-0 pb-5">
                    <img src="{{ asset('assets/images/cocorepublic-3.png') }}" class="w-100">
                </div>
            </div>
        </div>
    </div> <!-- latest-reviews -->
    <div id="doesnt-stuff-around" class="container-fluid">
        <div class="container">
            <div class="row first">
                <div class="col-lg-6 first-column p-0">
                    <img src="{{ asset('assets/images/review-riot.png') }}" class="ctm-rounded w-100">
                </div>
                <div class="col-lg-6 second-column text-white mt-5 mb-5 ctm-rounded">
                    <h2 class="mb-5">Review Riot Doesn’t Stuff Around</h2>
                    <p class="mb-5">We researched and rate thousands of products from over 730 brands across 30+ different categories.</p>
                    <h4 class="mb-5 pb-4">If something sucks, we’ll say so. We spot trends. We say it how it is.</h4>
                    <a href="#" class="gen-btn text-white">learn more</a>
                </div>
            </div>
        </div>
    </div> <!-- doesnt-stuff-arround -->
    <div id="reviewed-this-month" class="container-fluid  mb-5">
        <div class="container ctm-secondary border-bottom">
            <div class="row align-items-center text-center">
                <h6 class="mb-5 pb-md-5 w-100 ">BRANDS REVIEWED THIS MONTH</h6>
                <div class="col-lg-3 col-sm-6 p-xl-5 p-4">
                    <img src="{{ asset('assets/images/Harris-Farm.jpg') }}" class="w-100">
                </div>
                <div class="col-lg-3 col-sm-6 p-xl-5 p-4">
                    <img src="{{ asset('assets/images/kogan.jpg') }}" class="w-100">
                </div>
                <div class="col-lg-3 col-sm-6 p-xl-5 p-4">
                    <img src="{{ asset('assets/images/coco-republic.jpg') }}" class="w-100">
                </div>
                <div class="col-lg-3 col-sm-6 p-xl-5 p-4">
                    <img src="{{ asset('assets/images/Pet-Circle.jpg') }}" class="w-100">
                </div>
            </div>
        </div>  
    </div> <!-- reviewed-this-month -->
    <div id="review-for-us" class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-lg-5 mt-lg-5">
                    <h2 class="mb-5">Want to Review Something For Us?</h2>
                    <p class="mb-5">The Review Riot team is stretched thin but with your help, we can review the world. The revolution starts today, we compare virtually everything.  We’re 100% free and privately owned (not by a bank or an insurance company). We’re on your side!</p>
                    <a href="#" class="d-sm-inline-block d-block gen-btn text-white mr-sm-4 mb-4 mb-sm-0 mb-md-5">ask a question</a>
                    <a href="#" class="d-sm-inline-block d-block gen-btn text-white">our crew</a>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('assets/images/People.jpg') }}" class="w-100">
                </div>
            </div>
        </div>
    </div> <!-- review-for-us -->
    <footer class="container-fluid">
        <div class="container pb-5 pt-5">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="row align-items-center">
                        <div class="col-lg-4 p-0 mb-lg-0 mb-4">
                            <ul class="m-0 p-0">
                                <li class="d-inline-block">
                                    <a href="#" class="text-white"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="#" class="text-white"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="#" class="text-white"><i class="fab fa-linkedin"></i></a>
                                </li>
                                <li class="d-inline-block">
                                    <a href="#" class="text-white"><i class="fab fa-youtube m-0"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-8 text-white p-0">
                            <p class="mb-lg-0 mb-3">&copy; 2019 Revietw Riot. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 p-0">
                    <div class="row align-items-center">
                        <div class="col-lg-9 pl-lg-5 mb-lg-0 mb-4">
                            <p class="pl-lg-5">Review Riot - British Virgin Islands Level 1, Palm Grove House, Wickham’s Cay 1, Road Town</p>
                        </div>
                        <div class="col-lg-3 p-0 ">
                             <div class="form-group">
                              <select id="country-select" class="form-control mx-lg-0 mx-auto">
                                <option class="australia">Australia</option>
                              </select>
                             
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt-4 pl-0 w-100 align-items-center mx-lg-0 mx-auto">
                    <div class="col-lg-6 text-white p-0 mb-lg-0 mb-4">
                        <h5 class="d-inline-block"><a href="#" class="text-white mr-4 mb-2">About Us</a></h5>
                        <h5 class="d-inline-block"><a href="#" class="text-white mr-4">Careers</a></h5>
                        <h5 class="d-inline-block"><a href="#" class="text-white mr-4">Media Room</a></h5>
                        <h5 class="d-inline-block"><a href="#" class="text-white mr-4">Contact Us</a></h5>
                        <h5 class="d-inline-block"><a href="#" class="text-white">Partner with Us</a></h5>
                    </div>
                    <div class="col-lg-6 p-0 text-lg-right underlined-links">
                        <a href="#" class="d-inline-block mr-3 mr-lg-5 mb-2">International Terms of Use</a>
                        <a href="#" class="d-inline-block mr-3 mr-lg-5">Privacy & Cookies Policy</a>
                        <a href="#" class="d-inline-block mr-3 mr-lg-5">Editorial Guidelines</a>
                        <a href="#" class="d-inline-block">Sitemap</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- BOOTSTRAP INCLUDES -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap-formhelpers.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
</body>
</html>