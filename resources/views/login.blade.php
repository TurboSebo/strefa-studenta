@extends('layouts.app')
@section ('title', 'Rejestracja')
@section ('caption')
<h1>Logowanie</h1>
@endsection
@section ('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        <br/>
    @endif
    <form action="{{ route('zaloguj') }}" method="POST">
    @csrf
    <label for="username">Nazwa użytkownika:</label><br/>
    <input type="text" name="username" id="username" required><br/>
    <label for="password">Hasło:</label><br/>
    <input type="password" name="password" id="password" required><br/>
    <button type="submit">Zaloguj</button>
    </form>
    @if ($errors->any())
    <div class="alert alert-danger" style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li style="list-style-type: none;">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <br/>
    <p>Nie masz konta?<a href="{{ route('rejestracja') }}">Zarejestruj się!</a></p>
@endsection