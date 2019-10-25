@extends('layouts.frontend.master')

@push('additionalCSS')
<!--Owl Slider-->
<link rel="stylesheet" href="{{ asset('assets/owlcarousel/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/owlcarousel/owl.theme.default.min.css') }}">
@endpush

@section('content')
<!-- ABOUT BANNER -->
{!! $page->content !!}

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