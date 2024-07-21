@extends('layouts.app')
@section ('title', 'Profil')
@section ('caption')
<h2>Przeglądaj profil</h2>
@endsection
@section ('main-content')
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div><br/>
@endif
<p>
    Nazwa użytkownika: {{ auth()->user()->username }} <br/>
    Adres e-mail: {{ auth()->user()->email }} <br/>
    Imię: {{ auth()->user()->first_name}} <br/>
    Nazwisko: {{ auth()->user()->last_name }} <br/>
    O mnie:  {{ auth()->user()->about_me }} <br/>
</p>
<a href="{{route('editprofile')}}">Edytuj Profil</a>

@endsection