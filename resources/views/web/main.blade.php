<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>La Maison De Valle</title>

    <style>
        @font-face {
            font-family: 'Conv_supermarket';
            src: url('{{ asset('supermarket/fonts/supermarket.eot') }}');
            src: local('☺'), url('{{ asset('supermarket/fonts/supermarket.woff') }}') format('woff'), url('{{ asset('supermarket/fonts/supermarket.ttf') }}') format('truetype'), url('{{ asset('supermarket/fonts/supermarket.svg') }}') format('svg');
            font-weight: normal;
            font-style: normal;
            /*unicode-range: U+0E00–U+0E7F;*/
        }

        @font-face {
            font-family: 'bell';
            src: url('{{ asset('BELL/fonts/BELL.eot') }}');
            src: local('☺'), url('{{ asset('BELL/fonts/BELL.woff') }}') format('woff'), url('{{ asset('BELL/fonts/BELL.ttf') }}') format('truetype'), url('{{ asset('BELL/fonts/BELL.svg') }}') format('svg');
            font-weight: normal;
            font-style: normal;
            /*unicode-range: U+0E00–U+0E7F;*/
        }
    </style>
    <!-- Bootstrap -->
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/style.css') }}" rel="stylesheet">

    <!-- Basic stylesheet -->
    <link rel="stylesheet" href="{{ asset('owl-carousel/owl.carousel.css') }}">

    <!-- Default Theme -->
    <link rel="stylesheet" href="{{ asset('owl-carousel/owl.theme.css') }}">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('owl-carousel/owl.carousel.js') }}"></script>

</head>

<body>

@include('web.header')

<div class="container" id="container">
    @yield('content')
</div>

@include('web.footer')

</body>
</html>