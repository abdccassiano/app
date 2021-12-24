<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>@yield('title', 'Dogram Code')</title>
	<style type="text/css">
		.active a {
			color: red;
			text-decoration: none;
		}
	</style>
</head>
<body>
	<h1>Home</h1>

	@include('partials/nav')
	@yield('content')

</body>
</html>