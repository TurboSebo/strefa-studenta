@extends('layouts.app')
@section ('title', 'Szkoły')
@section ('caption')
<h1>Przeglądaj Szkoły</h1>
@endsection
@section('main-content')
<table>
    <tr>
        <th>Nazwa</th>
        <th>Adres</th>
    </tr>
    @foreach($schools as $school)
    <tr>
        <td>{{ $school->nazwa_szkoly }}</td>
        <td>{{ $school->miasto }}</td>
    </tr>
    @endforeach
</table>
@endsection