<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('css/app.min.css') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('page-title')</title>
</head>
<body>
    <header class="container">
        <a href="/"><span class="logo">Auto News</span></a>
        <nav>
            <a href="/">Головна</a>
            <a href="/about-us">Про нас</a>

            @guest
                <a href="/login">Ввійти</a>
            @else
                <a href="/articles/add">Додати статтю</a>
                <a href="/home">{{ Auth::user()->name }}</a>

                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit">Вийти</button>
                </form>
            @endguest
        </nav>
    </header>

    {{--<div id="app"></div>--}}

    <main class="container">
        @include('blocks.messages')
        @yield('content')
    </main>

    <footer>Всі права захищені @</footer>

     <script src={{ asset('js/app.js') }} defer></script>
</body>
</html>
