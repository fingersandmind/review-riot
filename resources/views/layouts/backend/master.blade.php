<!doctype html>
<html lang="en">
	
@include('partials.backend.head')
	<body>

		<!-- Loading starts -->
		@if(Request::is('admin'))
		<div id="loading-wrapper">
			<div class="spinner-border text-apex-green" role="status">
				<span class="sr-only">Loading...</span>
			</div>
		</div>
		@endif
		<!-- Loading ends -->

		<div class="container">


			<!-- *************
				************ Header section start *************
				************* -->


			<!-- Header start -->
			@include('partials.backend.header')
			<!-- Header end -->



			<!-- Navigation start -->
			@include('partials.backend.nav')
			<!-- Navigation end -->
			<!-- Search bar start -->
			<div class="search-container">
				<!-- Row start -->
				<div class="row justify-content-center">
					<div class="col-xl-5 col-lg-6 col-md-7 col-sm-8 col-12">
						
						<div class="search-box">
							<input type="text" class="search-query" placeholder="Search here ...">
							<i class="icon-search1"></i>
						</div>

					</div>
				</div>
				<!-- Row end -->
            </div>
            
			<div class="main-container">
                @yield('content')
				<!-- Content wrapper end -->
			</div>
		</div>

		@include('sweetalert::alert')
		<!-- Required jQuery first, then Bootstrap Bundle JS -->
        @include('partials.backend.javascripts')

	</body>

</html>