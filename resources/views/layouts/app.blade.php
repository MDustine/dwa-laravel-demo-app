<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>{{ $pageTitle ?? 'My Laravel App' }}</title>
</head>
<body>
    <nav>
        <a href="/students">Students</a>
    </nav>
<main>
@yield('content')
</main>
<footer>&copy; 2026 My Laravel App</footer>
</body>
</html>