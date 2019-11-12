<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials.head')
</head>

<body>
    <div id="app">
        @include('partials.navbar')

        @yield('content')

        @include('partials.footer')
    </div>
    @include('partials.scripts')
</body>

</html>