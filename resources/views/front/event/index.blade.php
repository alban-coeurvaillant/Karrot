@component('layouts.front')
    @slot('h1')
        Concerts et reservations
    @endslot

    @foreach($data as $row)
        <div>
            <h2>{{ ucfirst($row->first()->date->isoFormat('MMMM YYYY')) }}</h2>
        </div>
        @foreach($row as $event)
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col col-9">
                        <h4><span style="color: black;">{{ $event->place }}</span><br></h4>
                        <p>{{ $event->description }}</p>
                        <h6 class="text-muted mb-2"><span style="color: black;">{{ ucfirst($event->date->isoFormat('dddd')) }}&nbsp;</span><i class="far fa-star"></i>&nbsp;{{ $event->date->format('d/m/y') }} {{ $event->time }}<br></h6>
                    </div>
                    <div class="col d-xxl-flex justify-content-xxl-end align-items-xxl-center">
                        <x-button-link href="{{ route('event.reservation', $event) }}">{{ __('Book') }}</x-button-link>
                    </div>
                </div>
            </div>
        </div>
      @endforeach
    @endforeach

@endcomponent
