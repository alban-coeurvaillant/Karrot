@component('layouts.front')
    @slot('h1')
        Discographie
    @endslot

    <section class="k-section">
        <div class="k-container">
            @foreach($discs as $disc)
            <div class="k-row">
                <div class="">
                <img class="img-fluid" src="{{ asset($disc->image_path) }}" alt="">
                </div>
                <div class="">
                    <div>{{ $disc->title }}</div>
                    <div><strong>{{ $disc->subtitle }}</strong></div>
                    <div>{{ $disc->description }}</div>
                    @if ($disc->url) <div><a href="{{ $disc->url }}" target="_blank">Découvrer l'album</a></div> @endif
                </div>
            </div>
            @endforeach

            <div class="mt-3">
                {{ $discs->onEachSide(0)->links() }}
            </div>
        </div>
    </section>
@endcomponent
