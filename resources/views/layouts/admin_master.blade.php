<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Mandalay Hospital</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        @include('layouts.css')

        @yield('css_file')
        @yield('css_code')

    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
            <div class="container d-flex align-items-center">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="oi oi-menu"></span> Menu
                </button>
                <p class="button-custom order-lg-last mb-0">
                    @auth
                        <a class="btn btn-secondary py-2 px-3" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @endauth 
                </p>
                <div class="collapse navbar-collapse" id="ftco-nav">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active"><a href="{{ route("home") }}" class="nav-link pl-0">home</a></li>
                        <li class="nav-item"><a href="{{ route("about") }}" class="nav-link">About</a></li>
                        <li class="nav-item"><a href="{{ route("doctors") }}" class="nav-link">Doctor</a></li>
                        <li class="nav-item"><a href="{{ route("services") }}" class="nav-link">Service</a></li>
                        <li class="nav-item"><a href="{{ route("pricing") }}" class="nav-link">Pricing</a></li>
                        <li class="nav-item"><a href="{{ route("blogs") }}" class="nav-link">Blog</a></li>
                        <li class="nav-item"><a href="{{ route("contact") }}" class="nav-link">Contact</a></li>
                        <li class="nav-item"><a href="{{ route("history") }}" class="nav-link">History</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- END nav -->
        @include('layouts.message')
        
        @yield('content')

        <!-- loader -->
        <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

        @include('layouts.js')
        @yield('js_file')
        @yield('js_code')
    </body>
</html>
