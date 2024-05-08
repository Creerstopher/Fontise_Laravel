<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('img/favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('img/favicon/safari-pinned-tab.svg') }}" color="#333333">
    <meta name="apple-mobile-web-app-title" content="Fontise">
    <meta name="application-name" content="Fontise">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#333333">

    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="bg-[#0E0E0E]">
@include('components.header')
<main>
    @yield('content')
</main>
@include('components.footer')
</body>
</html>
