<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">

    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/worldmap.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/test.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/inquiry.css') }}">




</head>

<body style="padding: 60px 0;">
        @include('layouts.header')

        <main class="py-4">
            @yield('content')
        </main>

        @include('layouts.footer')
</body>

</html>
