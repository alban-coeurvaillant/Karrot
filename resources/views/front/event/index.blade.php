@component('layouts.front')
    @slot('h1')
        {{ __('Events') }}
    @endslot

    @foreach($data as $row)
        <h2>{{ $row->first()->year_month }}</h2>
        @foreach($row as $event)
        <div>
            <h3>{{ $event->place }}</h3>
            <div>{{ $event->date ? $event->date->format('d/m/Y') : null }}</div>
            <div>{{ $event->time }}</div>
            <div>
                <x-button-link href="{{ route('event.reservation', $event) }}">{{ __('Reservation') }}</x-button-link>
            </div>
        </div>
      @endforeach
    @endforeach

@endcomponent
