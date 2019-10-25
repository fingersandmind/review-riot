<!-- review-for-us -->
<footer class="container-fluid">
    <div class="container pb-5 pt-5">
        <div class="align-items-xl-center row">
            <div class="col-lg-5 pl-lg-0">
                <div class="d-lg-inline-block pr-lg-4">
                    <ul class="m-lg-0 mr-lg-3 p-0">
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

                <div class="d-lg-inline-block mb-2 mb-lg-0">
                    <p>© 2019 Revietw Riot. All Rights Reserved.</p>
                </div>
            </div>
            <div class="col-lg-7 p-0">
                <div class="align-items-xl-center row">
                    <div class="col-xl-9 pl-xl-5 mb-lg-0 mb-4" style="
                    ">
                        <p class="mb-xl-0 mb-lg-3 pl-xl-5">Review Riot - British Virgin Islands Level 1, Palm Grove House, Wickham’s Cay 1, Road Town</p>
                    </div>
                    <div class="col-xl-3 p-0">
                        <div class="form-group m-0">
                            <form class="choose-lang m-auto mr-0 mw-220 position-relative" style="
                        ">
                                <div class="flag"><img src="{{ asset('assets/images/australia.png') }}"></div>
                                <select id="country-select" class="form-control mx-lg-0 mx-auto australia-active">
                                    <option class="australia">Australia</option>
                                </select>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-4 pl-0 w-100 align-items-center mx-lg-0 mx-auto">
                <div class="col-lg-6 text-white p-0 mb-lg-0 mb-3 mb-md-4">
                    @php
                        $pages = App\Page::whereIsPublished(true)->orderBy('order_no', 'asc')->get();
                    @endphp
                    @foreach($pages as $page)
                        <h5 class="d-block d-md-inline-block mb-2"><a href="/{{ $page->slug }}" class="font-16 mb-2 mr-md-3 pr-0 pr-md-4 text-white">{{ $page->title }}</a></h5>
                    @endforeach
                </div>
                <div class="col-lg-6 p-0 text-lg-right underlined-links">
                    <div class="d-block d-md-inline-block mb-2 mb-md-0"><a href="#" class="mr-md-4 mr-xl-5 mb-2">International Terms of Use</a></div>
                    <div class="d-block d-md-inline-block mb-2 mb-md-0">
                        <a href="#" class="mr-md-4 mr-xl-5 mb-2">Privacy &amp; Cookies Policy</a>
                    </div>
                    <div class="d-block d-md-inline-block mb-2 mb-md-0">
                        <a href="#" class="mr-md-4 mr-xl-5 mb-2">Editorial Guidelines</a>
                    </div>
                    <div class="d-block d-md-inline-block">
                        <a href="#" class="mb-2">Sitemap</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>