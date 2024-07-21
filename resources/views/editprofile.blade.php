@extends('layouts.app')
@section ('title', 'Edytuj Profil')
@section ('caption')
<h2>Edytuj profil</h2>
@endsection
@section ('main-content')
<form action="{{ route('updateprofile') }}" method="POST">
    @csrf
    @method('PUT')
    <p>
        Nazwa użytkownika: {{ auth()->user()->username }} <br/>
        Adres e-mail: {{ auth()->user()->email }} <br/>
    </p>
    <p>
        <label for="first_name">Imię:</label> <br/><input type="text" name="first_name" id="first_name" value="{{ auth()->user()->first_name }}"><br/>
        <label for="last_name">Nazwisko:</label> <br/><input type="text" name="last_name" id="last_name" value="{{ auth()->user()->last_name }}"><br/>
        <label for="about_me">O mnie:</label> <br/><textarea name="about_me" id="about_me">{{auth()->user()->about_me}}</textarea><br/>
    </p>
    </p>
    <button type="submit">Zapisz zmiany</button>
    <a href="{{ route('myprofile') }}">Porzuć zmiany</a>
</form>

@endsection