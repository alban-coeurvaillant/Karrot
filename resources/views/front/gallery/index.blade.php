@component('layouts.front')
    @slot('h1')
        Galerie photo
    @endslot

    <section class="o-photo-gallery ">
        <div class="container">
            <div class="photos" data-bss-baguettebox="">
                @foreach($images as $image)
                <div class="photo">
                    <a href="{{ $image->path }}">
                        <img class="img-fluid" src="{{ $image->thumbpath }}" alt="">
                    </a>
                </div>
                @endforeach
            </div>
            
            <div class="mt-3">
                {{ $images->onEachSide(0)->links() }}
            </div>
        </div>
    </section>
@endcomponent
