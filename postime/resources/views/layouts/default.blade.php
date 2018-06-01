<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('css/default.css') }}" rel="stylesheet">

    <script src="{{ asset('js/jquery-3.3.1.slim.min.js') }}"></script>
    <!-- <script src="{{ asset('js/popper.min.js') }}"></script> -->
    <!-- <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script> -->
    <!-- <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script> -->
</head>
<body>

@yield('content')
    
</body>
</html>
