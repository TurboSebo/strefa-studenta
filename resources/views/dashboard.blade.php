@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Dashboard</h1>
        <p>Welcome to your dashboard, {{ Auth::user()->username }}!</p>
        <p>Here you can see your profile, edit it or log out.</p>
        <a href="{{ route('myprofile') }}">Wyświetl mój profil</a>
        <form action="{{ route('wyloguj') }}" method="POST">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </div>
@endsection