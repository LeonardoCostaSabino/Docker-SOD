<!doctype html>
<html lang="{{ app()->getLocale() }}" >
<head>
    @include('includes.head')
</head>
<body>
<div>
    <header>
        @include('includes.public_header')
    </header>
    <div id="app">
        @yield('content')
    </div>
    <footer>
        @include('includes.footer')
    </footer>
</div>
</body>
</html>
