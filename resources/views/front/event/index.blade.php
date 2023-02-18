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
            <p>{{ $event->place }}</p>
                <span class="event-image">img</span>
                <span class="event-description">{{ $event->description }}</span>
                <span class="day"> {{ ucfirst($event->date->isoFormat('dddd')) }} </span>
                <span class="date">{{ $event->date->format('d/m/y') }}  </span>
                <span class="time">{{ $event->time }}</span>
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
