<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.frontend.meta')
    @include('layouts.frontend.head')
    @yield('head')
    <title>@yield('title',config('app.name'))</title>
</head>
<body>
        {{-- @include('frontend.includes.header') --}}
        @yield('content')
        {{-- @include('frontend.includes.footer') --}}
        @include('layouts.frontend.scripts')
</body>
</html>
