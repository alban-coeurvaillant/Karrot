<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Titre')</title>
    <link rel="stylesheet" href="{{ mix('css/front.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alata&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+Sans&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=EB+Garamond&amp;display=swap">
    <link rel="stylesheet" href="{{ asset('fonts/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/gs-colors.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    {{ $scripts ?? null }}
</head>
<body>
<div class="main-wrapper mt-4 mx-auto">
    @include('front.header-nav')
    <div class="o-section-title dd-flex p-5">
        <h1 class="a-heading a-heading-1">{{ $h1 }}</h1>
    </div>
    <div id="main" class="o-main-content">
        <div class="d-flex flex-column flex-lg-row main-container p-4">
          <div class="main-column p-4">
            {{ $slot }}
            </div>
            <div class="aside-column bg-body">
                <div id="contact-block-head">
                    <p class="fs-4 mb-1 p-2 tex text-center text-white">Texte</p>
                </div>
            </div>
        </div>
    </div>
    
    <footer class="d-flex flex-column flex-lg-row p-3">
        <div class="footer-copyrights text-center d-flex align-items-center">
        <p class="mb-0 text-center"> Tous droits réservés placeholder ©2022 </p>
        </div>
    </footer>
</div>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.js"></script>
<script src="{{ asset('js/Lightbox-Gallery.js') }}"></script>
<script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>
