<nav x-data="{ open: false }" class="bg-white navbar navbar-expand-lg px-5">
    <div class="container-fluid p-0">
        <a href="{{ route('admin.dashboard') }}" class="navbar-brand">
            <x-application-logo width="200" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nflex-grow-1 nav-item p-2 text-center">
                    <x-nav-link :href="route('admin.dashboard')" :active="request()->routeIs('admin.dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </li>
                <li class="flex-grow-1 nav-item p-2 text-center">
                    <x-nav-link :href="route('admin.content.index')" :active="request()->routeIs('admin.content.*')">
                        {{ __('Contents') }}
                    </x-nav-link>
                </li>
                @if (config('karrot.event'))
                <li class="flex-grow-1 nav-item p-2 text-center">
                    <x-nav-link :href="route('admin.event.index')" :active="request()->routeIs('admin.event.*')">
                        {{ __('Events') }}
                    </x-nav-link>
                </li>
                @endif
                @if (config('karrot.gallery'))
                <li class="flex-grow-1 nav-item p-2 text-center">
                    <x-nav-link :href="route('admin.gallery.index')" :active="request()->routeIs('admin.gallery.*')">
                        {{ __('Gallery') }}
                    </x-nav-link>
                </li>
                @endif
                <li class="flex-grow-1 nav-item p-2 text-center">
                    <x-nav-link :href="route('admin.disc.index')" :active="request()->routeIs('admin.disc.*')">
                        {{ __('Discography') }}
                    </x-nav-link>
                </li>
                @if (config('karrot.contact'))
                <li class="flex-grow-1 nav-item p-2 text-center">
                    <x-nav-link :href="route('admin.contact.index')" :active="request()->routeIs('admin.contact.*')">
                        {{ __('Contacts') }}
                    </x-nav-link>
                </li>
                @endif
                <li class="flex-grow-1 nav-item p-2 text-center">
                    <x-nav-link :href="route('logout')">
                        {{ __('Se déconnecter') }}
                    </x-nav-link>
                </li>
            </ul>
        </div>
    </div>
    
</nav>
