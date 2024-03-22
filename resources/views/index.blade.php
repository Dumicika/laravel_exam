<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body>
    <nav class="navbar navbar-expand-lh bg-dark">
        <a href="{{ route('index') }}" class="text-white">Home</a>
    </nav>
    
    @yield('content')
    <footer>
        <p class="text-center">Dumi</p>
    </footer>
</body>
</html>