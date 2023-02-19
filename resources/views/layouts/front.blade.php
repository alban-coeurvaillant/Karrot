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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    {{ $scripts ?? null }}
</head>
<body>
<div class="main-wrapper mt-4">
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
                    <p class="fs-4 mb-1 p-2 tex text-center text-white">Réservations</p>
                </div>
                <p class="o-contact-block w-100 p-2">
                    <span class="d-flex w-100 a-heading"> <a href="http://www.fnactickets.com/recherche/rechercheRapide.do?search=gospel+dream" class="border-0 btn btn-outline-dark btn-primary p-2 text-white w-100">Acheter sur la Fnac</a> </span>
                    <span class="d-flex w-100 mt-2"> <a href="http://www.francebillet.com/recherche/rechercheRapide.do?search=GOSPEL+DREAM" class="border-0 btn btn-outline-dark btn-primary p-2 text-white w-100">Acheter sur FranceBillet</a> </span>
                </p>
                <div id="image-block mb-3">
                    <picture class="d-flex justify-content-center">
                        <img class="w-75" src="{{ asset('img/affiche.jpg') }}">
                    </picture>
                </div>
                <p class="d-flex flex-column p-2">
                    <span class="border-0 btn btn-outline-dark btn-primary p-2 text-white w-100 ">Tél. : 01 43 14 08 10</span>
                    <span class="border-0 btn btn-outline-dark btn-primary p-2 text-white w-100 mt-2">Port. : 06 07 08 55 56</span>
                </p>
                <div id="video-block">
                    <p class="fs-4 mb-0 p-2 tex text-center text-white fs-5">Presse Pack</p>
                    <iframe src="//www.youtube.com/embed/C8I3TzXBMA4" allowfullscreen="" frameborder="0" height="143" width="100%"></iframe>
               </div>
            </div>
        </div>
    </div>
    
    <footer class="d-flex flex-column flex-lg-row p-3">
        <div class="footer-copyrights text-center d-flex align-items-center">
        <p class="mb-0 text-center"> Tous droits réservés www.gospeldream.com ©2022 </p>
        </div>
         <div class="footer-mentions text-center">
         <a href="{{ url('mentions-legales') }}">Consultez nos mentions légales</a>
         </div>
        <div class="footer-socials d-flex align-items-center flex-column mt-1 flex-lg-row ms-auto">
            <p class="mb-0 text-center">Retrouvez nous sur nos sur :</p>
            <div class="socials-icons text-center">
            <a href="https://www.facebook.com/Gospeldreamfr/" id="facebook">
                <i class="fab fa-facebook m-2">
                </i>
            </a>
            <a href="#" id="instagram">
                <i class="fab fa-instagram m-1">
                </i>
            </a>
            </div>
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
