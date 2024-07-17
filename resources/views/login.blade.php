@extends('layouts.app')
@section ('title', 'Rejestracja')
@section ('header')
<h1>Logowanie</h1>
@endsection
@section ('content')
    <form action="" method="POST">
    @csrf
    <label for="username">Nazwa użytkownika:</label><br/>
    <input type="text" name="username" id="username" required><br/>
    <label for="password">Hasło:</label><br/>
    <input type="password" name="password" id="password" required><br/>
    <button type="submit">Zaloguj</button>
    </form>
@endsection