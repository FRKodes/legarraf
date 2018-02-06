<!DOCTYPE html>
<html lang="en">
<head>
	@include('partials.metas')
	@include('partials.styles')
</head>
<script> fbq('track', 'ViewContent'); </script>
<body class="@yield('body_page')">
	
	@include('partials.social-stuff')

	@include('partials.nav')
	@yield('content')
	@include('partials.footer')
	@include('partials.analytics')
	@include('partials.scripts')
	
	@if(Route::getCurrentRoute()->getPath() == "sucursales")
		<script src="js/maps.google.js"></script>
	@endif
	
</body>
</html>