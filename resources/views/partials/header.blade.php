<nav >
    <a href="/">Teams</a>
    @if (!(Auth::check()))
    <a href="/login" class="ml-auto">Login</a>
    <a href="/registration" class="ml-auto">Registrate</a>
    @endif
    @if (Auth::check())
        <a href="/logout" class="ml-auto">Log out</a>
    @endif
</nav>