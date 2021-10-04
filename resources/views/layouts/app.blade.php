<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        @yield('title')
    </title>

    <!-- Fonts -->
    {{-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> --}}

    <!-- Bootstrap -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito';
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <a href="#"><span class="navbar-brand mb-0 h1">Todo</span></a>
            <a href="#"><span class="btn btn-primary">Create Todo</span></a>
        </div>
    </nav>

    <div class="container">

        @yield('content')

    </div>

</body>

</html>