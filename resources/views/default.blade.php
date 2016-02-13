<!doctype html>
<html lang=''>
<head>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="{{ asset('/css/menubar.css') }}">
    <script src="{{ asset('/js/menubar.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('/css/skeleton.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/custom.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <title>WDinnove</title>
</head>
<body>

@yield('navigation')

@yield('content')

<div class="footer alignc">@WDinnove, 2016.</div>
<br>