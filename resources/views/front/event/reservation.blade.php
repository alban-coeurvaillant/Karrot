@component('layouts.front')
    @slot('h1')
        {{ __('Reservation') }}
    @endslot

    <div>
        <div>{{ $event->place }}</div>
        <div>{{ $event->date }}</div>
        <div>{{ $event->time }}</div>
    </div>

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

    <form action="{{ route('event.sendReservation', $event) }}" method="post" enctype="application/x-www-form-urlencoded">
        @csrf

        <div>
            <label for="lastname">{{ __('Lastname') }}</label>
            <input type="text" name="lastname" id="lastname">
        </div>
        <div>
            <label for="firstname">{{ __('Firstname') }}</label>
            <input type="text" name="firstname" id="firstname">
        </div>
        <div>
            <label for="email">{{ __('Email') }}</label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="message">{{ __('Your message') }}</label>
            <textarea name="message" id="message"></textarea>
        </div>

        <div>
            <button>{{ __('Send') }}</button>
        </div>

    </form>

@endcomponent
