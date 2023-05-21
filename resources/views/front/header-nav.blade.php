<header class="d-flex flex-column p-4">
    <div class="d-flex flex-column flex-lg-row justify-content-lg-between">
        <h1><a class="text-decoration-none" href="{{ route('home') }}">Karrington Creation</a></h1>
        <h2>Un graphisme simplement différent</h2>
        <div id="mobile-btn" class="btn btn-primary d-lg-none mt-3">voir le menu</div>
        <div id="ticker" class="o-ticker">
            <p>This is a ticker</p>
        </div>
    </div>
</header>

<ul id="main-nav" class="d-flex flex-column flex-lg-row m-0 o-main-nav p-0">
    @if (config('karrot.gallery'))
    <li class="nav-item flex-grow-1 nav-item text-center">
        <a class=" @if (request()->routeIs('gallery.index')) d-lg-none active @endif d-flex align-items-center justify-content-center p-2" href="{{ route('gallery.index') }}">Galerie photo</a>
    </li>
    @endif
</ul>
