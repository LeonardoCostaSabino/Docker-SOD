<!doctype html>
<html lang="{{ app()->getLocale() }}" >
<head>
    @include('public.head')
</head>
<body>
<div>
    <header>
        @include('public.header')
    </header>
    <div id="app">
        @yield('content')
    </div>
    <footer>
        @include('default.footer')
    </footer>
</div>
</body>
</html>
