<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Karrot boilerplate')</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<header class="container mx-auto mb-5 border-b">
    <ul class="flex flex-row gap-3 py-5">
        <li><a href="/">Accueil</a></li>
        <li><a href="{{ url('page-1') }}">Page 1</a></li>
    </ul>
</header>
<main class="container mx-auto">
    <h1>{{ $h1 }}</h1>
    {{ $slot }}
</main>
</body>
</html>
