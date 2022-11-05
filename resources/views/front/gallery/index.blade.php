@component('layouts.front')
    @slot('h1')
        Galerie photo
    @endslot

    <section class="photo-gallery py-4 py-xl-5">
        <div class="container">
            <div class="row gx-2 gy-2 row-cols-1 row-cols-md-2 row-cols-xl-3 photos" data-bss-baguettebox="">
                @foreach($images as $image)
                <div class="col item"><a href="{{ $image->path }}"><img class="img-fluid" src="{{ $image->thumbpath }}" alt=""></a></div>
                @endforeach
                <div class="w-100"></div>
                <div class="w-100"></div>
            </div>
        </div>
    </section>
@endcomponent
