<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/frontpage.css')}}">
</head>
<body>
	
		@yield('content')

	
	<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
</body>
</html>