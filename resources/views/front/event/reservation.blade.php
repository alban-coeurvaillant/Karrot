@component('layouts.front')
    @slot('scripts')
        <script src="https://js.hcaptcha.com/1/api.js?hl=fr" async defer></script>
    @endslot
    
    @slot('h1')
        {{ __('Reservation') }}
    @endslot

    <div>
        <div>{{ $event->place }}</div>
        <div>{{ $event->date_fr }}</div>
        <div>{{ $event->time }}</div>
    </div>

    @if ($errors->any())
        <x-alert class="alert-danger">
            @foreach($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        </x-alert>
    @endif

    @if (session('confirmation'))
    <x-alert class="alert-success">
        {{ session('confirmation') }}
    </x-alert>
    @endif

    @if (!$event->seats)
        <div>Toutes les places ont été réservées pour ce concert.</div>
    @else
    <form action="{{ route('event.sendReservation', $event) }}" method="post" enctype="application/x-www-form-urlencoded">
        @csrf

        <div class="row mb-3">
            <label for="lastname" class="col-sm-4 col-md-3 col-form-label">{{ __('Lastname') }} *</label>
            <div class="col-sm-8 col-md-6">
                <input type="text" name="lastname" id="lastname" class="form-control" value="{{ old('lastname') }}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="firstname" class="col-sm-4 col-md-3 col-form-label">{{ __('Firstname') }} *</label>
            <div class="col-sm-8 col-md-6">
                <input type="text" name="firstname" id="firstname" class="form-control" value="{{ old('firstname') }}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="email" class="col-sm-4 col-md-3 col-form-label">{{ __('Email') }} *</label>
            <div class="col-sm-8 col-md-6">
                <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="nb_seats" class="col-sm-5 col-md-3 col-form-label">{{ __('Nb seats') }} *</label>
            <div class="col-auto">
                <select name="nb_seats" id="nb_seats" class="form-control">
                    @foreach(range(1, min(50, $event->seats)) as $nb)
                        <option value="{{ $nb }}" @if (old('nb_seats') == $nb) selected @endif>{{ $nb }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="mb-3">
            <label for="message">{{ __('Your message') }}</label>
            <textarea name="message" id="message" class="form-control" rows="4">{{ old('message') }}</textarea>
        </div>

        <div
            class="h-captcha mb-3"
            data-sitekey="{{ env('HCAPTCHA_SITEKEY') }}"
        ></div>

        <div class="mb-3">
            <button class="btn btn-primary">{{ __('Send') }}</button>
        </div>

    </form>
    @endif

@endcomponent
