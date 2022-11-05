<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Gospel Dream')</title>
    <link rel="stylesheet" href="{{ mix('css/front.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alata&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+Sans&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=EB+Garamond&amp;display=swap">
    <link rel="stylesheet" href="{{ asset('fonts/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/gs-colors.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header-Footer-Clean.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header-Navigation-Clean1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.css">
    <link rel="stylesheet" href="{{ asset('css/Navbar-Right-Links-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Pretty-Footer-.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    {{ $scripts ?? null }}
</head>
<body class="bg-dark">
<div class="main-wrapper container-fluid mx-auto">
    @include('front.header-nav')

    <div class="p-3 section--tiltle">
        <h1>{{ $h1 }}
            sss
        </h1>
    </div>
    <div id="main-1" class="bg-light">
        <div>
            <div class="row d-flex flex-row flex-sm-column flex-md-column flex-lg-column flex-xl-row flex-xxl-row container-fluid" style="margin: 0;padding: 2em;background: #efefef;">
                <div class="col-12 col-xl-9 col-xxl-9 col-9">
                    {{ $slot }}
                </div>
                <div class="col-10 col-sm-10 col-xl-3 col-xxl-3 col-3">
                    <h3 class="text-capitalize" style="background: #4a0740;color: var(--bs-light);font-size: 0.9em;padding: 0.3em;text-align: center;margin-top: 0.5em;">Réservations</h3>
                    <picture><img src="{{ asset('img/affiche.jpg') }}" style="width: 100%;"></picture><button class="btn btn-primary" type="button" style="background: rgb(125, 105, 144);border-radius: 0;min-width: 100%;margin-top: 0.5em;">Acheter sur la Fnac</button><button class="btn btn-primary" type="button" style="background: rgb(125, 105, 144);border-radius: 0;min-width: 100%;margin-top: 0.5em;">Acheter sur la Fnac</button>
                    <h3 class="text-capitalize" style="background: #4a0740;color: var(--bs-light);font-size: 0.9em;padding: 0.3em;text-align: center;margin-top: 0.5em;">Presse Pack</h3>
                </div>
            </div>
        </div>
    </div>
    
    <footer class="d-flex flex-column justify-content-between align-items-center flex-xl-row flex-xxl-row p-2" style="background: #4a0740;margin: 0;border-bottom-right-radius: 2em;border-bottom-left-radius: 2em;min-height: 3em;">
        <div class="d-flex flex-column align-items-center flex-sm-column flex-md-column flex-lg-column flex-xl-row flex-xxl-row">
            <p class="fw-normal p-2" style="margin: 0;font-size: 0.9em;color: var(--bs-gray-400);">&nbsp;© 2022 - Tous droits réservés www.gospeldream.fr&nbsp;</p><a class="fw-lighter" href="#" style="font-size: 0.9em;color: #b3a38e;">Consultez nos mentions légales</a>
        </div>
        <div class="d-flex justify-content-center align-items-center justify-content-xxl-center align-items-xxl-center" style="margin-right: 1em;">
            <p class="fw-light d-xxl-flex align-items-xxl-center p-2" style="margin: 0;font-size: 0.9em;color: var(--bs-gray-400);">Retrouvez nous sur nos sur :</p><a href="#"><i class="fab fa-facebook m-2" style="color: #b3a38e;"></i></a><a href="#"><i class="far fa-star m-1" style="color: #b3a38e;"></i></a><a href="#"><i class="fab fa-instagram m-1" style="color: #b3a38e;"></i></a>
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
