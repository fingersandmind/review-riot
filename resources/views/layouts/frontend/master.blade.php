<!DOCTYPE html>
<html>
    {{-- head --}}
@include('partials.frontend.head')
<body style="">
    {{-- header --}}
    @include('partials.frontend.header')
    
    {{--  content  --}}
    @yield('content')

    {{-- footer --}}
    @include('partials.frontend.footer')


    {{--  BOOTSTRAP INCLUDES  --}}
    
    @include('sweetalert::alert')
	@include('partials.frontend.javascripts')
	
</body>
</html>