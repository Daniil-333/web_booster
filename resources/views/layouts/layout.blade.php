<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta name="robots" content="noindex">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Комплексные поставки электронных компонентов и оборудования. Подберем аналоги популярных брендов из Европы в условиях санкций.">

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <title>@section('title')@show</title>

    @vite(['resources/scss/app.scss'])
</head>
<body>

    <div class="wrapper">
        @include('common.header')

        @yield('content')

        @include('common.footer')

    </div>

    @vite(['resources/js/app.js'])
</body>
</html>
