<nav x-data="{ open: false }" class="navbar navbar-expand-lg bg-white">
    <div class="container-fluid">
        <!-- Logo -->
        <a href="{{ route('admin.dashboard') }}" class="navbar-brand">
            <x-application-logo width="50" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <x-nav-link :href="route('admin.dashboard')" :active="request()->routeIs('admin.dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </li>
                <li class="nav-item">
                    <x-nav-link :href="route('admin.content.index')" :active="request()->routeIs('admin.content.*')">
                        {{ __('Contents') }}
                    </x-nav-link>
                </li>
                @if (config('karrot.event'))
                <li class="nav-item">
                    <x-nav-link :href="route('admin.event.index')" :active="request()->routeIs('admin.event.*')">
                        {{ __('Events') }}
                    </x-nav-link>
                </li>
                @endif
                @if (config('karrot.contact'))
                <li class="nav-item">
                    <x-nav-link :href="route('admin.contact.index')" :active="request()->routeIs('admin.contact.*')">
                        {{ __('Contacts') }}
                    </x-nav-link>
                </li>
                @endif
                <li class="nav-item">
                    <x-nav-link :href="route('logout')">
                        {{ __('Se déconnecter') }}
                    </x-nav-link>
                </li>
            </ul>
        </div>
    </div>
    
</nav>
