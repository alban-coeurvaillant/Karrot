<header class="o-header">
    <a class="navbar-brand" href="#">
        <picture class="">
            <img src="{{ asset('img/GD-logo.svg') }}" loading="lazy">
        </picture>
    </a>
    <span  class="navbar-brand-baseline">
    Chants authentiques de l'église Afro-Américaine
    </span>
</header>

<ul class="nav nav-tabs flex-column nav-fill d-flex justify-content-center align-items-start flex-sm-column align-items-sm-center flex-xl-row flex-xl-nowrap flex-xxl-row flex-xxl-nowrap" style="background: #4a0740;border-style: none;">
    
    <li class="nav-item flex-grow-0 align-self-stretch align-self-sm-stretch align-self-md-stretch align-self-lg-stretch">
        <a class="nav-link  @if (url()->current() == url('/')) active @endif fw-semibold flex-grow-1" href="/" style="border-radius: 0;color: var(--bs-nav-tabs-link-active-bg);">
        Notre chorale
        </a>
    </li>

    <li class="nav-item flex-grow-0 align-self-stretch align-self-sm-stretch align-self-md-stretch align-self-lg-stretch" style="border-style: none;">
        <a class="nav-link @if (url()->current() == url('histoire-du-gospel')) active @endif fw-semibold flex-grow-1" href="{{ url('histoire-du-gospel') }}" style="border-radius: 0;color: var(--bs-nav-tabs-link-active-bg);">L'histoire du gospel</a>
    </li>
    @if (config('karrot.event'))
        <li class="nav-item flex-grow-0 align-self-stretch align-self-sm-stretch align-self-md-stretch align-self-lg-stretch">
            <a class="nav-link @if (request()->routeIs('event.index')) active @endif fw-semibold flex-grow-1" href="{{ route('event.index') }}" style="border-radius: 0;color: var(--bs-nav-tabs-link-active-bg);">Concerts et reservations</a>
        </li>
    @endif
    @if (config('karrot.gallery'))
    <li class="nav-item flex-grow-0 align-self-stretch align-self-sm-stretch align-self-md-stretch align-self-lg-stretch">
        <a class="nav-link @if (request()->routeIs('gallery.index')) active @endif fw-semibold flex-grow-1" href="{{ route('gallery.index') }}" style="border-radius: 0;color: var(--bs-nav-tabs-link-active-bg);">Galerie photo</a>
    </li>
    @endif
    <li class="nav-item @if (url()->current() == url('presse')) active @endif flex-grow-0 align-self-stretch align-self-sm-stretch align-self-md-stretch align-self-lg-stretch">
        <a class="nav-link fw-semibold flex-grow-1" href="{{ url('presse') }}" style="border-radius: 0;color: var(--bs-nav-tabs-link-active-bg);">Presse</a>
    </li>
    <li class="nav-item @if (url()->current() == url('discographie')) active @endif flex-grow-0 align-self-stretch align-self-sm-stretch align-self-md-stretch align-self-lg-stretch">
        <a class="nav-link fw-semibold flex-grow-1" href="{{ url('discographie') }}" style="border-radius: 0;color: var(--bs-nav-tabs-link-active-bg);">Discographie</a>
    </li>
    @if (config('karrot.contact'))
        <li class="nav-item flex-grow-0 align-self-stretch align-self-sm-stretch align-self-md-stretch align-self-lg-stretch"><a class="nav-link @if (request()->routeIs('contact.index')) active @endif fw-semibold flex-grow-1" href="{{ route('contact.index') }}" style="border-radius: 0;color: var(--bs-nav-tabs-link-active-bg);">Contactez-nous</a></li>
    @endif
</ul>
