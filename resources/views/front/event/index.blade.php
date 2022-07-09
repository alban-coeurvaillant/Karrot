@component('layouts.front')
    @slot('h1')
        {{ __('Events') }}
    @endslot

    @foreach($events as $event)
        <div>
            <div>{{ $event->place }}</div>
            <div>{{ $event->date }}</div>
            <div>{{ $event->time }}</div>
            <div>
                <x-button-link href="{{ route('event.reservation', $event) }}">{{ __('Reservation') }}</x-button-link>
            </div>
        </div>
    @endforeach

@endcomponent
