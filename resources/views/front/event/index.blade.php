@component('layouts.front')
    @slot('h1')
        Concerts et reservations
    @endslot

    @foreach($data as $row)
        <div class="o-calendar-date ">
            <p>{{ ucfirst($row->first()->date->isoFormat('MMMM YYYY')) }}</p>
        </div>
         <div class="o-events mt-3">
        @foreach($row as $event)
        <div class="align-items-center d-flex flex-column mt-0 o-card-event p-3">
                <span class="ai--c d-flex event-place h5">{{ $event->place }}</span>
                <div class="event__content">
                <span class="event-image d-flex ai--c d-none">img</span>
                <span class="event-description d-flex ai--c d-none">{{ $event->description }}</span>
                <span class="day d-flex ai--c"> {{ ucfirst($event->date->isoFormat('dddd')) }} </span>
                <span class="date d-flex ai--c">{{ $event->date->format('d/m/y') }}  </span>
                <span class="time d-flex ai--c">{{ $event->time }}</span>
                </div>
                <span class="event-reservation w-100">
                    <x-button-link :primary="false" href="{{ route('event.reservation', $event) }}">{{ __('Book') }}</x-button-link>
                </span>
        </div>
        @endforeach
  </div>
    @endforeach
  
    <div class="mt-3">
        {{ $events->onEachSide(0)->links() }}
    </div>

@endcomponent
