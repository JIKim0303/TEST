<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vide(['resources/js.app.js'])
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" >
    <link rel="stylesheet" href="{{ asset('js/animation.js') }}" >
</head>
<body>
    @include('layouts.header2')

    frame.blade
    <main>
        @yield('content')
    </main>

    @include('layouts.footer')
</body>
</html>