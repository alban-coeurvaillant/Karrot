@component('layouts.front')
    @slot('h1')
        Galerie photo
    @endslot

    <section class="o-photo-gallery ">
        <div class="container">
        <h3>Découvrez la chorale</h3>
        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
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
