<html>
    <head>
        <title>@yield('title')</title>
        <link href="{{ asset('css/bulma.min.css') }}" rel="stylesheet"/>
        <link href="{{ asset('css/style.css') }}" rel="stylesheet"/>
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
    </body>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</html>