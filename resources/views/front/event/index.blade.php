@component('layouts.front')
    @slot('h1')
        Concerts et reservations
    @endslot

    @foreach($data as $row)
        <div class="o-calendar-date">
            <p>{{ ucfirst($row->first()->date->isoFormat('MMMM YYYY')) }}</p>
        </div>
         <div class="o-events">
        @foreach($row as $event)
        <div class="o-card-event">
                <span class="event-place d-flex ai--c">{{ $event->place }}</span>
                <span class="event-image d-flex ai--c">img</span>
                <span class="event-description d-flex ai--c">{{ $event->description }}</span>
                <span class="day d-flex ai--c"> {{ ucfirst($event->date->isoFormat('dddd')) }} </span>
                <span class="date d-flex ai--c">{{ $event->date->format('d/m/y') }}  </span>
                <span class="time d-flex ai--c">{{ $event->time }}</span>
               <span class="event-reservation">
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
