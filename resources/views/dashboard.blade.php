@extends('layouts.app')

@section('main-content')
    <div class="container">
        <h1>Dashboard</h1>
        <p>Witaj na stronie,
            @if(Auth::user()->first_name)
                {{ Auth::user()->first_name }}
            @else
                {{ Auth::user()->username }}
            @endif
            </p>
        <p>Here you can see your profile, edit it or log out.</p>
        <a href="{{ route('myprofile') }}">Wyświetl mój profil</a>
        <form action="{{ route('wyloguj') }}" method="POST">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </div>
@endsection