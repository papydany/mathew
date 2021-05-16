<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    @include('partial.header')
</head>   
<body class="">
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
    </div>
    @include('partial.navigation')
    
    @yield('content')
    @include('partial.script')	

</body>
</html>