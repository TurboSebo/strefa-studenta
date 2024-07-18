<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Sebastian Kałuża">
    <meta name="description" content="Moja pierwsza aplikacja w Laravel">
    <meta name="keywords" content="laravel, aplikacja, pierwsza">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="reply-to" content="example@mail.com">
    <title>@yield('title', 'Strefa Studenta')</title>
</head>
<body>
    @include('layouts.nav-bar')
    <header>@yield('header')</header>
    
    <main>
        @yield('content')
    </main>
    <footer>
        <!-- wspólna stópka -->
         <p>&copy; 2024 Sebastian Kałuża.</p>
    </footer>
</body>
</html>