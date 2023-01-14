<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
     
        
    </head>
    <body class="o-admin-page">
        <div class="main-wrapper">
            @include('layouts.navigation')
            <!-- Page Heading start-->
            <header class="o-admin-header">
                    {{ $header }}
            </header>
            <!-- Page Heading end-->
    
            <!-- Page Content start-->
            <main class="main-container">
                {{ $slot }}
            </main>
             <!-- Page Content end-->
        </div>
    </body>
</html>
