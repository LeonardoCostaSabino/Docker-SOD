<!doctype html>
<html lang="{{ app()->getLocale() }}" >
<head>
    @include('includes.head')
</head>
<body>
<div>
    <header>
        @include('includes.header')
    </header>
    <div id="app">
        @yield('content')
    </div>
    <footer class="section footer-classic context-dark bg-image" style="background: #2d3246;>
        @include('includes.footer')
    </footer>
</div>
</body>
</html>
