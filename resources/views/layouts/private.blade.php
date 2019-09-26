<!doctype html>
<html lang="{{ app()->getLocale() }}" >
<head>
    @include('private.head')
</head>
<body>
<div>
    <header>
        @include('private.header')
    </header>
    <div id="app">
        <localizador-component></localizador-component>
        @yield('content')

    </div>

    <footer>
        @include('default.footer')
    </footer>
</div>
</body>
</html>
