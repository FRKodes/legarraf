<!DOCTYPE html>
<html lang="en">
<head>
	@include('partials.metas')
	@include('partials.styles')
</head>
<body class="@yield('body_page')">
	
	@include('partials.social-stuff')

	@include('partials.nav')
	@yield('content')
	@include('partials.footer')
	@include('partials.scripts')
	
</body>
</html>