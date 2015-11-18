<!DOCTYPE html>
<html lang="en">
<head>
	@include('partials.metas')
	@include('partials.styles')
</head>
<body>
	@include('partials.nav')
	@yield('content')
	@include('partials.footer')
	@include('partials.scripts')
	
</body>
</html>