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
<div class="main-wrapper ">
    @include('front.header-nav')
    <div class="o-section-title">
        <h1>{{ $h1 }}</h1>
    </div>
    <div id="main" class="o-main-content">
                <div class="main-column">
                    {{ $slot }}
                </div>
                <div class="aside-column">
                 
                    <picture>
                        <img src="{{ asset('img/affiche.jpg') }}">
                    </picture>
                    <h3>Réservations</h3>
                    <div id="contact-block">
                        <p>
                        <span class="tel"><strong>Tél. :</strong>   01 43 14 08 10</span>
                        <span class="port"><strong>Port. :</strong>  06 07 08 55 56</span>
                        </p>
                        <ul class="o-contact-block">
                            <li>
                            <button type="button" class="btn btn-buy">Acheter sur la Fnac</button>
                            </li>
                            <li>
                            <button type="button" class="btn btn-buy">Acheter sur la Fnac</button>
                            </li>
                        </ul>
                    </div>

                   
               
                    <h3>Presse Pack</h3>
                </div>
    </div>
    
    <footer>
        <div class="footer-mentions">
            <p>&nbsp;© 2022 - Tous droits réservés www.gospeldream.fr&nbsp;</p>
            <a href="#">Consultez nos mentions légales</a>
        </div>
        <div class="footer-socials">
            <p>Retrouvez nous sur nos sur :</p>
            <a href="#">
                <i class="fab fa-facebook m-2">
                </i>
            </a>
            <a href="#">
                <i class="far fa-star m-1">
                </i>
            </a>
            <a href="#">
                <i class="fab fa-instagram m-1">
                </i>
            </a>
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
