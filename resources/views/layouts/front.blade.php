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
    {{ $scripts ?? null }}
</head>
<body>
<header class="navbar navbar-expand-lg bg-white">
    <div class="container">
        <a href="/" class="navbar-brand">
            <x-application-logo width="50" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <x-nav-link :href="url('page-1')" :active="url()->current() == url('page-1')">
                        Page 1
                    </x-nav-link>
                </li>
                <li class="nav-item">
                    <x-nav-link :href="url('page-2')" :active="url()->current() == url('page-2')">
                        Page 2
                    </x-nav-link>
                </li>
                <li class="nav-item">
                    <x-nav-link :href="url('page-3')" :active="url()->current() == url('page-3')">
                        Page 3
                    </x-nav-link>
                </li>
                @if (config('karrot.event'))
                <li class="nav-item">
                    <x-nav-link :href="route('event.index')" :active="request()->routeIs('event.index')">
                        Events
                    </x-nav-link>
                </li>
                @endif
                @if (config('karrot.contact'))
                <li class="nav-item">
                    <x-nav-link :href="route('contact.index')" :active="request()->routeIs('contact.index')">
                        Contact
                    </x-nav-link>
                </li>
                @endif
            </ul>
        </div>
    </div>
</header>

<main class="container mx-auto">
    <h1>{{ $h1 }}</h1>
    {{ $slot }}
</main>
</body>
</html>
