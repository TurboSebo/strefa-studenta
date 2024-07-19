@extends('layouts.app')
@section ('title', 'Rejestracja')
@section ('caption')
<h1>Rejestracja</h1>
@endsection
@section ('content')
    <form action="{{ route('zarejestruj') }}" method="POST">
        @csrf
        <label for="username">Nazwa użytkownika:</label><br/>
        <input type="text" name="username" id="username" required><br/>
        <label for="email">Adres e-mail:</label><br/>
        <input type="email" name="email" id="email" required><br/>
        <label for="password">Hasło:</label><br/>
        <input type="password" name="password" id="password" required><br/>
        <label for="password_confirmation">Powtórz Hasło:</label><br/>
        <input type="password" name="password_confirmation" id="password_confirmation" required><br/>
        <label for="first_name">Imię</label><br/>
        <input type="text" name="first_name" id="first_name"><br/>
        <label for="last_name">Nazwisko</label><br/>
        <input type="text" name="last_name" id="last_name"><br/>
        <label for="accept">Akceptuję <a href="#">regulamin</a></label>
        <input type="checkbox" name="accept" id="accept"><br/>
        <button type="submit">Zarejestruj</button>
    </form>
    @if ($errors->any())
    <div class="alert alert-danger" style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <p>Masz już konto?<a href="{{ route('logowanie') }}">Zaloguj się!</a></p>

@endsection