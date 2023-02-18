<header class="o-master-headerp-4 d-flex fd--r jc--sb p-4">
<div class="d-flex w-100 jc--sb">
    <a class="header-logo d-block " href="{{ route('home') }}">
        <picture class="">
            <img src="{{ asset('img/GD-logo.svg') }}" loading="lazy">
        </picture>
    </a>
    <div class="header-baseline">
    <p>Chants authentiques de l'église Afro-Américaine</p>
    </div>
</div>
    <div id="mobile-btn"> voir le menu</div>
 
</header>

<ul id="main-nav" class="o-main-nav">
    <li class="nav-item">
        <a class="@if (request()->routeIs('home')) active @endif" href="/">
        Notre chorales        
        </a>
    </li>
    <li class="nav-item">
        <a class="@if (url()->current() == url('histoire-du-gospel')) active @endif" href="{{ url('histoire-du-gospel') }}">L'histoire du gospel</a>
    </li>
    @if (config('karrot.event'))
    <li class="nav-item">
            <a class="@if (request()->routeIs('event.*')) active @endif " href="{{ route('event.index') }}" >Concerts et reservations</a>
        </li>
    @endif

    @if (config('karrot.gallery'))
    <li class="nav-item">
        <a class=" @if (request()->routeIs('gallery.index')) active @endif" href="{{ route('gallery.index') }}">Galerie photo</a>
    </li>
    @endif

    <li class="nav-item">
        <a class="@if (url()->current() == url('presse')) active @endif" href="{{ url('presse') }}">Presse</a>
    </li>
    <li class=" nav-item">
        <a class="@if (url()->current() == url('discographie')) active @endif" href="{{ route('disc.index') }}">Discographie</a>
    </li>
    @if (config('karrot.contact'))
    <li class="nav-item">
            <a class="@if (request()->routeIs('contact.index')) active @endif" href="{{ route('contact.index') }}">Contactez-nous</a></li>
    @endif
</ul>
