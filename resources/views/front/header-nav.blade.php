<header class="o-master-header">
    <a class="header-logo" href="{{ route('home') }}">
        <picture class="">
            <img src="{{ asset('img/GD-logo.svg') }}" loading="lazy">
        </picture>
    </a>
    <div class="header-baseline">
    <p>Chants authentiques de l'église Afro-Américaine</p>
    </div>
</header>

<ul class="o-main-nav">
    <li class="nav-item">
        <a class="@if (request()->routeIs('home')) active @endif" href="/">
        Notre chorale
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
