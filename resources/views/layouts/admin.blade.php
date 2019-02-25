<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>My Faculty | Admin</title>

        <!-- Styles -->
        {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
        <link href="{{ asset('css/admin.css') }}" rel="stylesheet">

    </head>
    <body class="page page--table">

        <section class="sidebar">
            <div class="sidebar__item sidebar__logo">
                <img src="{{ asset('/images/backgrounds/background__admin.jpg') }}" alt="" class="sidebar__logo-image sidebar__logo-image--default">
            </div>
            <div class="sidebar__item sidebar__title">
                <h2 class="sidebar__title-text">My Faculty</h2>
            </div>
            <nav class="sidebar__item">
                <ul class="sidebar__menu">
                    <li><a href="{{ route('home') }}" class="link sidebar__menu-item sidebar__menu-item--link">Dashboard</a></li>
                    <li><a href="{{ route('home') }}" class="link sidebar__menu-item sidebar__menu-item--link">Departments</a></li>
                    <li><a href="{{ route('home') }}" class="link sidebar__menu-item sidebar__menu-item--link">Settings</a></li>
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="link sidebar__menu-item sidebar__menu-item--exit">Exit</a>
                    </li>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </ul>
            </nav>
            <footer class="sidebar__item sidebar__item--footer">
                <span>CFU &copy; 2019</span>
            </footer>
        </section>

        @yield('content')

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
