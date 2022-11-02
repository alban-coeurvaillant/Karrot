<header style="background: var(--bs-body-bg);border-top-left-radius: 1em;border-top-right-radius: 1em;min-height: 6em;">
    <div class="d-flex flex-column justify-content-center align-items-center flex-wrap justify-content-sm-center flex-xl-row justify-content-xl-between flex-xxl-row justify-content-xxl-between p-3">
        <a class="navbar-brand d-flex" href="#">
            <picture class="d-flex justify-content-center align-items-center"><img class="img-fluid" src="{{ asset('img/GD-logo.svg') }}" style="width: 100%;height: 100%;" width="100%" height="100%" loading="lazy"></picture>
        </a>
        <div><span class="text-nowrap fs-5 fw-bold" style="font-family: 'Alegreya Sans', sans-serif;background: linear-gradient(#361030, #45143c 100%), var(--bs-purple);color: rgb(255,255,255);border-radius: 0.3em;border-top-left-radius: 0.2em;border-top-right-radius: 0.2em;border-bottom-right-radius: 0.2em;border-bottom-left-radius: 0.2em;font-size: 1.2em;padding-top: 0.2em;padding-right: 0.5em;padding-bottom: 0.3em;padding-left: 0.5em;">Chants authentiques de l'église Afro-Américaine</span></div>
    </div>
</header>
<ul class="nav nav-tabs flex-column nav-fill d-flex justify-content-center align-items-start flex-sm-column align-items-sm-center flex-xl-row flex-xl-nowrap flex-xxl-row flex-xxl-nowrap" style="background: #4a0740;border-style: none;">
    <li class="nav-item flex-grow-0 align-self-stretch align-self-sm-stretch align-self-md-stretch align-self-lg-stretch">
        <a class="nav-link  @if (url()->current() == url('/')) active @endif fw-semibold flex-grow-1" href="/" style="border-radius: 0;color: var(--bs-nav-tabs-link-active-bg);">Notre chorale</a>
    </li>
    <li class="nav-item flex-grow-0 align-self-stretch align-self-sm-stretch align-self-md-stretch align-self-lg-stretch" style="border-style: none;">
        <a class="nav-link @if (url()->current() == url('histoire-du-gospel')) active @endif fw-semibold flex-grow-1" href="{{ url('histoire-du-gospel') }}" style="border-radius: 0;color: var(--bs-nav-tabs-link-active-bg);">L'histoire du gospel</a>
    </li>
    @if (config('karrot.event'))
        <li class="nav-item flex-grow-0 align-self-stretch align-self-sm-stretch align-self-md-stretch align-self-lg-stretch">
            <a class="nav-link @if (request()->routeIs('event.index')) active @endif fw-semibold flex-grow-1" href="{{ route('event.index') }}" style="border-radius: 0;color: var(--bs-nav-tabs-link-active-bg);">Concerts et reservations</a>
        </li>
    @endif
    <li class="nav-item flex-grow-0 align-self-stretch align-self-sm-stretch align-self-md-stretch align-self-lg-stretch">
        <a class="nav-link fw-semibold flex-grow-1" href="photo-galery.html" style="border-radius: 0;color: var(--bs-nav-tabs-link-active-bg);">Galerie photo</a>
    </li>
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
