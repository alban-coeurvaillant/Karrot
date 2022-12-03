@component('layouts.front')
    @slot('h1')
        Discographie
    @endslot

    <section class="py-4 py-xl-5">
        <div class="container">
            @foreach($discs as $disc)
            <div class="row mb-5">
                <div class="col-auto"><img class="img-fluid" src="{{ asset($disc->image_path) }}" alt=""></div>
                <div class="col-12 col-sm-8 col-md-7 col-xl-8">
                    <div>{{ $disc->title }}</div>
                    <div><strong>{{ $disc->subtitle }}</strong></div>
                    <div>{{ $disc->description }}</div>
                    @if ($disc->url) <div><a href="{{ $disc->url }}" target="_blank">Découvrer l'album</a></div> @endif
                </div>
            </div>
            @endforeach
        </div>
    </section>
@endcomponent
