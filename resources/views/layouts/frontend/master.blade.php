<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.frontend.meta')
    @include('layouts.frontend.head')
    @yield('head')
    <title>@yield('title', config('app.name'))</title>
</head>

<body>

    <div class="preloader">
        <div class="preloader_image">
            <div class="sk-double-bounce">
                <div class="sk-child sk-double-bounce1"></div>
                <div class="sk-child sk-double-bounce2"></div>
            </div>
        </div>
    </div>


    {{-- @include('frontend.includes.header') --}}
    @yield('content')
    {{-- @include('frontend.includes.footer') --}}
    @include('layouts.frontend.scripts')
</body>

</html>
