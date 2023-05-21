<header class="d-flex flex-column p-4">
    <div class="d-flex flex-column flex-lg-row justify-content-lg-between">
        <a class="text-decoration-none" href="{{ route('home') }}">Karrington Creation</a>
        <div class="header-baseline mt-2">
            <p class="fs-3 text-body">Un graphisme simplement différent</p>
        </div>
    </div>
    <div id="mobile-btn" class="btn btn-primary d-lg-none mt-3">voir le menu</div>
</header>
<div id="ticker" class="o-ticker" >
   <p>This is a ticker</p>
</div>
<ul id="main-nav" class="d-flex flex-column flex-lg-row m-0 o-main-nav p-0">
    @if (config('karrot.gallery'))
    <li class="nav-item flex-grow-1 nav-item text-center">
        <a class=" @if (request()->routeIs('gallery.index')) d-lg-none active @endif d-flex align-items-center justify-content-center p-2" href="{{ route('gallery.index') }}">Galerie photo</a>
    </li>
    @endif
</ul>
