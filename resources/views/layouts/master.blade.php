<!DOCTYPE html>
<html lang="en">
    <head>
        @include('partials.head')
    </head>
    <body>
        <div class="container">
                @include('partials.header')
                @if (!(Auth::check()))
                    <a href="/login" class="ml-auto">Login</a>
                    <a href="/register" class="ml-auto">Registrate</a>
                @endif
                @if (Auth::check())
                    <a href="/logout" class="ml-auto">Log out</a>
                @endif
            <div class="row">
                <div class="col-sm-8 blog-main">
                    @yield('content')
                </div>
                <div class="col-sm-3 offset-sm-1 blog-sidebar">
                    @include('partials.sidebar')
                </div>
            </div>
            @include('partials.footer')
        </div>
        
    </body>
</html>