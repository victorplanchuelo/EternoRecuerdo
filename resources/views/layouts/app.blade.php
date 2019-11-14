<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials.head')
    @yield('header')
</head>

<body>
    <div id="app">
        @include('partials.navbar')

        @yield('content')

        @include('partials.footer')
    </div>
    @include('partials.scripts')
    @yield('scripts')
</body>

</html>