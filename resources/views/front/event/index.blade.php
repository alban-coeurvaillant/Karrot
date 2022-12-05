@component('layouts.front')
    @slot('h1')
        Concerts et reservations
    @endslot

    @foreach($data as $row)
        <div>
            <h2>{{ ucfirst($row->first()->date->isoFormat('MMMM YYYY')) }}</h2>
        </div>
        @foreach($row as $event)
        <div class="o-card-event">
            <div class="card-title">
            <h4>{{ $event->place }}</span><br></h4>
            </div>
            <div class="card-description">
            <div class="event-description">
                <div class="event-image">img</div>
                <p>{{ $event->description }}</p>
            </div> 
            <div class="event-reservation">
            <span class="date">
                    {{ ucfirst($event->date->isoFormat('dddd')) }}   <i class="far fa-star"></i>
                    {{ $event->date->format('d/m/y') }}      
                </span>
                <span class="time">{{ $event->time }}</span>
                <x-button-link href="{{ route('event.reservation', $event) }}">{{ __('Book') }}</x-button-link>
            </div>
            </div>
        </div>
        @endforeach
    @endforeach

    <div class="mt-3">
        {{ $events->onEachSide(0)->links() }}
    </div>

@endcomponent
