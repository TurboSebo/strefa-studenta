<nav>
    <ul>
            <li><a href="{{ route('main') }}">Strona główna</a></li>
            @if (!Auth::check())
                <li><a href="{{ route('logowanie') }}">Logowanie</a></li>
            @endif
            @if (Auth::check())
                <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
            @endif
            @if (Route::currentRouteName() == 'main')
                <li><a href="{{ route('rejestracja') }}">Rejestracja</a></li>
            @endif
    </ul>
</nav>