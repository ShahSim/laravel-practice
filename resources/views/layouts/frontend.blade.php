<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('public/css/bootstrap5.css')}}">
        <link rel="stylesheet" href="{{asset('public/css/custom.css')}}">
    </head>
    <body class="antialiased">
        @include('layouts.inc.navbar')
        <div class="container">
            @yield('content')
        </div>
    </body>
    <script src="{{asset('public/js/bootstrap5.bundle.js')}}"></script>
    <script src="{{asset('public/js/jquery-3.6.0.min.js')}}"></script>
    @yield('js')
</html>
