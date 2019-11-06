<html>
    <head>
        <title>@yield('title')</title>
        <link href="{{ asset('css/bulma.min.css') }}" rel="stylesheet"/>
        <link href="{{ asset('css/style.css') }}" rel="stylesheet"/>
    </head>
    <body>
        <nav class="navbar is-fixed-top is-info" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <a class="navbar-item" href="/">
                    <b>phonebook!</b>
                </a>
            
                <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                </a>
            </div>
            
            <div id="navbarBasicExample" class="navbar-menu">
                <div class="navbar-start">
                    <a href="/add" class="navbar-item">
                        Add Data
                    </a>
                    <a href="/" class="navbar-item">
                        List Data
                    </a>
                </div>
            </div>
        </nav>
        <div class="container">
            @yield('content')
        </div>
    </body>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</html>