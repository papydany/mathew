<!DOCTYPE html>
<html lang="en">
<head>
    @include('partial.front_header')
</head>

<body>
	<!-- Preloader Start -->
	<div class="preloader"></div>
	<!-- Preloader End -->
	<!-- header Start -->
	<header class="header-style-two">
    @include('partial.front_nav')	
	</header>
	<!-- header End -->
	
    @yield('content')

    <footer class="footer">
        @include('partial.font_footer')
	</footer>
	<!-- Footer Area End -->
	<!-- BACK TO TOP SECTION -->
	<div class="back-to-top bg-primary-color">
		<i class="fab fa-angle-up"></i>
	</div>
    @include('partial.font_script')
	</body>


</html>