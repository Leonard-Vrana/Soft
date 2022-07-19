<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8" /> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta property="og:url" content="{{ url()->full() }}" />
	<meta name="robots" content="noidex, nofollow">
	<title>{{ !empty($pageTitle ?? null) ? ($pageTitle .' | ') : '' }} Inventár</title>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
</head>
<body id="page-top">
	@yield('body')
	<script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
	<script src="{{ asset('js/app.js') }}"></script> 
</body>
</html>