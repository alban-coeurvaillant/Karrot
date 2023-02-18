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
    <div class="o-section-title">
        <h1 class="a-heading a-heading-1">{{ $h1 }}</h1>
    </div>
    <div id="main" class="o-main-content">
        <div class="d-flex flex-column flex-lg-row main-container p-4">
          <div class="main-column p-4">
            {{ $slot }}
            </div>
            <div class="aside-column">
                <div id="contact-block">
                    <div class="contact-block__head">
                    <h3 class="p-3">Réservations</h3>
                    </div>
                     
                    <p class="d-flex fd--c ai--c">
                        <span class="tel mt-3">Tél. :   01 43 14 08 10</span>
                        <span class="port mt-3">Port. : 06 07 08 55 56</span>
                    </p>
                </div>
                                        
                <div id="image-block">
                    <picture class="d-flex justify-content-center">
                        <img class="w-75" src="{{ asset('img/affiche.jpg') }}">
                    </picture>
                </div>
          
                 <ul class="o-contact-block w-100 p-2">
                    <li> <a href="http://www.fnactickets.com/recherche/rechercheRapide.do?search=gospel+dream" class="d-flex ai--c jc--c w-100">Acheter sur la Fnac</a> </li>
                    <li class="mt-2"> <a href="http://www.francebillet.com/recherche/rechercheRapide.do?search=GOSPEL+DREAM" class="d-flex ai--c jc--c w-100">Acheter sur FranceBillet</a> </li>
                </ul>
            
                <div id="video-block">
                    <h3>Presse Pack</h3>
                    <iframe src="//www.youtube.com/embed/C8I3TzXBMA4" allowfullscreen="" frameborder="0" height="143" width="100%"></iframe>
               </div>
                               
            </div>
              
            
        </div>
    </div>
    
    <footer>
    <div class="footer-container">
    
    </div>
        <div class="footer-copyrights">
            <p> Tous droits réservés www.gospeldream.com ©2022 </p>
        </div>
         <div class="footer-mentions">
         <a href="{{ url('mentions-legales') }}">Consultez nos mentions légales</a>
         </div>
        <div class="footer-socials">
            <p>Retrouvez nous sur nos sur :</p>
            <div class="socials-icons">
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
