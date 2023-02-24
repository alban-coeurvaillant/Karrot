<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{ asset('js/app.js') }}" defer></script>
        
    </head>
    <body class="bg-danger m-5 o-admin-header p-4">
        <div class="bg-light p-5 m-5">
            @include('layouts.navigation')
            <header class="o-admin-header">
                    {{ $header }}
            </header>
            
            <main class="main-container">
                {{ $slot }}
            </main>
            
        </div>
    </body>
</html>
