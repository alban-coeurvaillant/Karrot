<header class="o-master-header">
    <a class="navbar-brand" href="#">
        <picture class="">
            <img src="{{ asset('img/GD-logo.svg') }}" loading="lazy">
        </picture>
    </a>
    <div class="navbar-brand-baseline">
    <p>Chants authentiques de l'église Afro-Américaine</p>
    </div>
</header>

<ul class="o-main-nav">
    <li class="nav-item">
        <a class="@if (url()->current() == url('/')) active @endif fw-semibold flex-grow-1" href="/">
        Notre chorale
        </a>
    </li>

    <li class="nav-item">
        <a class="@if (url()->current() == url('histoire-du-gospel')) active @endif" href="{{ url('histoire-du-gospel') }}">L'histoire du gospel</a>
    </li>

    @if (config('karrot.event'))
    <li class="nav-item">
            <a class="@if (request()->routeIs('event.index')) active @endif " href="{{ route('event.index') }}" >Concerts et reservations</a>
        </li>
    @endif

    @if (config('karrot.gallery'))
    <li class="nav-item">
        <a class=" @if (request()->routeIs('gallery.index')) active @endif" href="{{ route('gallery.index') }}">Galerie photo</a>
    </li>
    @endif

    <li class="nav-item @if (url()->current() == url('presse')) active @endif">
        <a href="{{ url('presse') }}">Presse</a>
    </li>
    <li class=" nav-item @if (url()->current() == url('discographie')) active @endif">
        <a href="{{ url('discographie') }}">Discographie</a>
    </li>
    @if (config('karrot.contact'))
    <li class="nav-item">
            <a class="@if (request()->routeIs('contact.index')) active @endif" href="{{ route('contact.index') }}">Contactez-nous</a></li>
    @endif
</ul>
