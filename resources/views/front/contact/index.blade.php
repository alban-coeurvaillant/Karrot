@component('layouts.front')
    @slot('scripts')
        <script src="https://js.hcaptcha.com/1/api.js?hl=fr" async defer></script>
    @endslot
    
    @slot('h1')
        {{ __('Contact') }}
    @endslot

    @if ($errors->any())
        <x-alert class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p class="m-0">{{ $error }}</p>
            @endforeach
        </x-alert>
    @endif

    @if (session('confirmation'))
    <x-alert class="alert alert-success">
        {{ session('confirmation') }}
    </x-alert>
    @endif

    <form action="{{ route('contact.send') }}" method="post" enctype="application/x-www-form-urlencoded">
        @csrf

        <div class="mb-3">
            <label for="lastname">{{ __('Lastname') }}</label>
            <x-input type="text" name="lastname" id="lastname" value="{{ old('lastname') }}" />
        </div>
        <div class="mb-3">
            <label for="firstname">{{ __('Firstname') }}</label>
            <x-input type="text" name="firstname" id="firstname" value="{{ old('firstname') }}" />
        </div>
        <div class="mb-3">
            <label for="email">{{ __('Email') }} *</label>
            <x-input type="email" name="email" id="email" required value="{{ old('email') }}"/>
        </div>
        <div class="mb-3">
            <label for="message">{{ __('Your message') }} *</label>
            <textarea name="message" id="message" class="form-control" required>{{ old('message') }}</textarea>
        </div>

        <div
            class="h-captcha"
            data-sitekey="{{ env('HCAPTCHA_SITEKEY') }}"
        ></div>

        <div>
            <x-button class="btn-primary">{{ __('Send') }}</x-button>
        </div>

    </form>

    <div class="my-3 small">
        <em>* {{ __('Mandatory fields') }}</em>
    </div>
@endcomponent
