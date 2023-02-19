@component('layouts.front')
    @slot('h1')
        Concerts et reservations
    @endslot

    @foreach($data as $row)
        <div class="o-calendar-date ">
            <p>{{ ucfirst($row->first()->date->isoFormat('MMMM YYYY')) }}</p>
        </div>
         <div class="o-events container d-grid gap-3 mt-3">
         <div class="row gap-3">

        @foreach($row as $event)
        <div class="align-items-center d-flex flex-column mt-0 o-card-event p-3 w-5 col">
                <span class="ai--c d-flex event-place h5">{{ $event->place }}</span>
                <div class="event__content d-flex">
                <span class="event-image d-flex ai--c d-none mx-2">img</span>
                <span class="event-description d-flex ai--c d-none mx-2">{{ $event->description }}</span>
                <span class="day d-flex  mx-2"> {{ ucfirst($event->date->isoFormat('dddd')) }} </span>
                <span class="date d-flex mx-2">{{ $event->date->format('d/m/y') }}  </span>
                <span class="time d-flex mx-2">{{ $event->time }}</span>
                </div>
                <span class="event-reservation">
                    <x-button-link  href="{{ route('event.reservation', $event) }}" class="btn btn-primary mt-2 h-auto">{{ __('Book') }}</x-button-link>
                </span>
        </div>
        @endforeach
        
        </div>
  </div>
    @endforeach
  
    <div class="mt-3">
        {{ $events->onEachSide(0)->links() }}
    </div>

@endcomponent
