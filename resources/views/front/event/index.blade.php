@component('layouts.front')
    @slot('h1')
        Concerts et reservations
    @endslot

    @foreach($data as $row)
        <div class="o-calendar-date ">
            <p>{{ ucfirst($row->first()->date->isoFormat('MMMM YYYY')) }}</p>
        </div>
         <div class="o-events container mt-3">
        @foreach($row as $event)
        <div class="align-items-center border col d-flex flex-column flex-lg-row mt-0 o-card-event p-2">
                <span class="d-flex w-50">{{ $event->place }}</span>
                <div class="d-flex m-2 order-first">
                <span class="event-image d-flex d-none mx-2">img</span>
                <span class="event-description d-flex d-none mx-2">{{ $event->description }}</span>
                <span class="day d-flex  mx-2"> {{ ucfirst($event->date->isoFormat('dddd')) }} </span>
                <span class="date d-flex mx-2">{{ $event->date->format('d/m/y') }}  </span>
                <span class="time d-flex mx-2">{{ $event->time }}</span>
                </div>
                <span class="d-flex flex-grow-1 justify-content-center">
                    <x-button-link  href="{{ route('event.reservation', $event) }}" class="btn btn-primary h-auto border-0 w-100">{{ __('Book') }}</x-button-link>
                </span>
        </div>
        @endforeach
      
  </div>
    @endforeach
  
    <div class="mt-3">
        {{ $events->onEachSide(0)->links() }}
    </div>

@endcomponent
