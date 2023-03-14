<header class="d-flex flex-column o-master-headerp-4 p-4">
<div class="d-flex flex-column flex-lg-row justify-content-lg-between">
    <a class="header-logo" href="{{ route('home') }}">
        <picture class="">
            <img src="{{ asset('img/GD-logo.svg') }}" loading="lazy">
        </picture>
    </a>
    <div class="header-baseline mt-2">
    <p class="text-capitalize">Un graphisme simplement différent</p>
    </div>
</div>
    <div id="mobile-btn " class="btn btn-primary d-lg-none mt-3 text-light"> voir le menu</div>
 
</header>

<ul id="main-nav" class="d-flex flex-column flex-lg-row m-0 o-main-nav p-0">
    @if (config('karrot.gallery'))
    <li class="nav-item flex-grow-1 nav-item text-center">
        <a class=" @if (request()->routeIs('gallery.index')) active @endif d-flex align-items-center justify-content-center p-2" href="{{ route('gallery.index') }}">Galerie photo</a>
    </li>
    @endif
</ul>
