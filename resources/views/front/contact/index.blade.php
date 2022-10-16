@component('layouts.front')
    @slot('scripts')
        <script src="https://js.hcaptcha.com/1/api.js?hl=fr" async defer></script>
    @endslot
    
    @slot('h1')
        {{ __('Contact') }}
    @endslot

    @if ($errors->any())
        <x-alert class="text-red-600">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </x-alert>
    @endif

    @if (session('confirmation'))
    <x-alert class="text-green-600">
        {{ session('confirmation') }}
    </x-alert>
    @endif

    <form action="{{ route('contact.send') }}" method="post" enctype="application/x-www-form-urlencoded">
        @csrf

        <div class="mb-3">
            <label for="lastname">{{ __('Lastname') }}</label>
            <x-input type="text" name="lastname" id="lastname" />
        </div>
        <div class="mb-3">
            <label for="firstname">{{ __('Firstname') }}</label>
            <x-input type="text" name="firstname" id="firstname" />
        </div>
        <div class="mb-3">
            <label for="email">{{ __('Email') }}</label>
            <x-input type="email" name="email" id="email" />
        </div>
        <div class="mb-3">
            <label for="message">{{ __('Your message') }}</label>
            <textarea name="message" id="message" class="form-control"></textarea>
        </div>

        <div
            class="h-captcha"
            data-sitekey="{{ env('HCAPTCHA_SITEKEY') }}"
        ></div>

        <div>
            <x-button class="btn-primary">{{ __('Send') }}</x-button>
        </div>

    </form>

@endcomponent
