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
            <div class="card-title">
            <h4>{{ $event->place }}</span><br></h4>
            </div>
            <div class="card-description">
                <div class="event-image">img</div>
                <div class="event-description">{{ $event->description }}</div>
                <div class="event-day-date-time">
                     <span class="day"> {{ ucfirst($event->date->isoFormat('dddd')) }} </span>
                    <span class="date">{{ $event->date->format('d/m/y') }}  </span>
                    <span class="time">{{ $event->time }}</span>
                </div> 
                </div> 
             <div class="event-reservation">
                <x-button-link :primary="false" href="{{ route('event.reservation', $event) }}">{{ __('Book') }}</x-button-link>
            </div>
        </div>
        @endforeach
  </div>
    @endforeach
  
    <div class="mt-3">
        {{ $events->onEachSide(0)->links() }}
    </div>

@endcomponent
